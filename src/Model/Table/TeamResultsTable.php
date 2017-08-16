<?php
namespace FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamResults Model
 *
 * @property \FootballData\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 * @property \FootballData\Model\Table\FixturesTable|\Cake\ORM\Association\BelongsTo $Fixtures
 * @property \FootballData\Model\Table\LeaguesTable|\Cake\ORM\Association\BelongsTo $Leagues
 * @property \FootballData\Model\Table\SeasonsTable|\Cake\ORM\Association\BelongsTo $Seasons
 *
 * @method \FootballData\Model\Entity\TeamResult get($primaryKey, $options = [])
 * @method \FootballData\Model\Entity\TeamResult newEntity($data = null, array $options = [])
 * @method \FootballData\Model\Entity\TeamResult[] newEntities(array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamResult|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FootballData\Model\Entity\TeamResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamResult[] patchEntities($entities, array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamResult findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TeamResultsTable extends Table
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

        $this->setTable('team_results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Teams'
        ]);
        $this->belongsTo('Fixtures', [
            'foreignKey' => 'fixture_id',
            'className' => 'FootballData.Fixtures'
        ]);
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
            ->integer('round')
            ->allowEmpty('round');

        $validator
            ->integer('home_team')
            ->requirePresence('home_team', 'create')
            ->notEmpty('home_team');

        $validator
            ->integer('game_played')
            ->requirePresence('game_played', 'create')
            ->notEmpty('game_played');

        $validator
            ->integer('win')
            ->requirePresence('win', 'create')
            ->notEmpty('win');

        $validator
            ->integer('draw')
            ->requirePresence('draw', 'create')
            ->notEmpty('draw');

        $validator
            ->integer('loss')
            ->requirePresence('loss', 'create')
            ->notEmpty('loss');

        $validator
            ->integer('goals_for')
            ->requirePresence('goals_for', 'create')
            ->notEmpty('goals_for');

        $validator
            ->integer('goals_against')
            ->requirePresence('goals_against', 'create')
            ->notEmpty('goals_against');

        $validator
            ->integer('points')
            ->requirePresence('points', 'create')
            ->notEmpty('points');

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
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['fixture_id'], 'Fixtures'));
        $rules->add($rules->existsIn(['league_id'], 'Leagues'));
        $rules->add($rules->existsIn(['season_id'], 'Seasons'));

        return $rules;
    }
}