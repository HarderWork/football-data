<?php
namespace HarderWork\FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Leagues Model
 *
 * @property \HarderWork\FootballData\Model\Table\SeasonsTable|\Cake\ORM\Association\BelongsTo $Seasons
 * @property \HarderWork\FootballData\Model\Table\FixturesTable|\Cake\ORM\Association\HasMany $Fixtures
 * @property \HarderWork\FootballData\Model\Table\TeamResultsTable|\Cake\ORM\Association\HasMany $TeamResults
 * @property \HarderWork\FootballData\Model\Table\TeamsTable|\Cake\ORM\Association\HasMany $Teams
 *
 * @method \HarderWork\FootballData\Model\Entity\League get($primaryKey, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League newEntity($data = null, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League[] newEntities(array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League[] patchEntities($entities, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\League findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LeaguesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('leagues');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Seasons', [
            'foreignKey' => 'season_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Seasons'
        ]);
        $this->hasMany('Fixtures', [
            'foreignKey' => 'league_id',
            'className' => 'FootballData.Fixtures'
        ]);
        $this->hasMany('TeamResults', [
            'foreignKey' => 'league_id',
            'className' => 'FootballData.TeamResults'
        ]);
        $this->hasMany('Teams', [
            'foreignKey' => 'league_id',
            'className' => 'FootballData.Teams'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('teams_in_league')
            ->requirePresence('teams_in_league', 'create')
            ->notEmpty('teams_in_league');

        $validator
            ->allowEmpty('results_url');

        $validator
            ->integer('xmlsoccer_leagueid')
            ->allowEmpty('xmlsoccer_leagueid');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['season_id'], 'Seasons'));

        return $rules;
    }
}
