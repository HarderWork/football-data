<?php
namespace FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teams Model
 *
 * @property \FootballData\Model\Table\LeaguesTable|\Cake\ORM\Association\BelongsTo $Leagues
 * @property \FootballData\Model\Table\PoolTeamAliasesTable|\Cake\ORM\Association\HasMany $PoolTeamAliases
 * @property \FootballData\Model\Table\PoolTeamPositionsTable|\Cake\ORM\Association\HasMany $PoolTeamPositions
 * @property \FootballData\Model\Table\PoolTeamResultsTable|\Cake\ORM\Association\HasMany $PoolTeamResults
 * @property \FootballData\Model\Table\TeamAliasesTable|\Cake\ORM\Association\HasMany $TeamAliases
 * @property \FootballData\Model\Table\TeamResultsTable|\Cake\ORM\Association\HasMany $TeamResults
 *
 * @method \FootballData\Model\Entity\Team get($primaryKey, $options = [])
 * @method \FootballData\Model\Entity\Team newEntity($data = null, array $options = [])
 * @method \FootballData\Model\Entity\Team[] newEntities(array $data, array $options = [])
 * @method \FootballData\Model\Entity\Team|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FootballData\Model\Entity\Team patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FootballData\Model\Entity\Team[] patchEntities($entities, array $data, array $options = [])
 * @method \FootballData\Model\Entity\Team findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TeamsTable extends Table
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

        $this->setTable('teams');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Leagues', [
            'foreignKey' => 'league_id',
            'className' => 'FootballData.Leagues'
        ]);
        $this->hasMany('PoolTeamAliases', [
            'foreignKey' => 'team_id',
            'className' => 'FootballData.PoolTeamAliases'
        ]);
        $this->hasMany('PoolTeamPositions', [
            'foreignKey' => 'team_id',
            'className' => 'FootballData.PoolTeamPositions'
        ]);
        $this->hasMany('PoolTeamResults', [
            'foreignKey' => 'team_id',
            'className' => 'FootballData.PoolTeamResults'
        ]);
        $this->hasMany('TeamAliases', [
            'foreignKey' => 'team_id',
            'className' => 'FootballData.TeamAliases'
        ]);
        $this->hasMany('TeamResults', [
            'foreignKey' => 'team_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('logo');

        $validator
            ->integer('xmlsoccer_teamid')
            ->allowEmpty('xmlsoccer_teamid');

        $validator
            ->integer('footballdata_teamid')
            ->allowEmpty('footballdata_teamid');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('stadium');

        $validator
            ->allowEmpty('home_page_url');

        $validator
            ->allowEmpty('wiki_url');

        $validator
            ->integer('squad_market_value')
            ->allowEmpty('squad_market_value');

        $validator
            ->allowEmpty('crest_url');

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

        return $rules;
    }
}
