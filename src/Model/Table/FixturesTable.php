<?php
namespace FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fixtures Model
 *
 * @property \FootballData\Model\Table\LeaguesTable|\Cake\ORM\Association\BelongsTo $Leagues
 * @property \FootballData\Model\Table\SeasonsTable|\Cake\ORM\Association\BelongsTo $Seasons
 * @property \FootballData\Model\Table\HomeTeamsTable|\Cake\ORM\Association\BelongsTo $HomeTeams
 * @property \FootballData\Model\Table\AwayTeamsTable|\Cake\ORM\Association\BelongsTo $AwayTeams
 * @property \FootballData\Model\Table\TeamResultsTable|\Cake\ORM\Association\HasMany $TeamResults
 *
 * @method \FootballData\Model\Entity\Fixture get($primaryKey, $options = [])
 * @method \FootballData\Model\Entity\Fixture newEntity($data = null, array $options = [])
 * @method \FootballData\Model\Entity\Fixture[] newEntities(array $data, array $options = [])
 * @method \FootballData\Model\Entity\Fixture|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FootballData\Model\Entity\Fixture patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FootballData\Model\Entity\Fixture[] patchEntities($entities, array $data, array $options = [])
 * @method \FootballData\Model\Entity\Fixture findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FixturesTable extends Table
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

        $this->setTable('fixtures');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Leagues', [
            'foreignKey' => 'league_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Leagues'
        ]);
        $this->belongsTo('Seasons', [
            'foreignKey' => 'season_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Seasons'
        ]);
        $this->belongsTo('HomeTeams', [
            'foreignKey' => 'home_team_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Teams'
        ]);
        $this->belongsTo('AwayTeams', [
            'foreignKey' => 'away_team_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Teams'
        ]);
        $this->hasMany('TeamResults', [
            'foreignKey' => 'fixture_id',
            'className' => 'FootballData.TeamResults'
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
            ->date('game_date')
            ->requirePresence('game_date', 'create')
            ->notEmpty('game_date');

        $validator
            ->dateTime('game_start')
            ->allowEmpty('game_start');

        $validator
            ->integer('round')
            ->allowEmpty('round');

        $validator
            ->integer('home_goals')
            ->allowEmpty('home_goals');

        $validator
            ->integer('away_goals')
            ->allowEmpty('away_goals');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->integer('source')
            ->allowEmpty('source');

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
        $rules->add($rules->existsIn(['league_id'], 'Leagues'));
        $rules->add($rules->existsIn(['season_id'], 'Seasons'));
        $rules->add($rules->existsIn(['home_team_id'], 'HomeTeams'));
        $rules->add($rules->existsIn(['away_team_id'], 'AwayTeams'));

        return $rules;
    }
}
