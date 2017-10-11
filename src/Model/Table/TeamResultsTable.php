<?php
namespace HarderWork\FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamResults Model
 *
 * @property \HarderWork\FootballData\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 * @property \HarderWork\FootballData\Model\Table\FixturesTable|\Cake\ORM\Association\BelongsTo $Fixtures
 * @property \HarderWork\FootballData\Model\Table\LeaguesTable|\Cake\ORM\Association\BelongsTo $Leagues
 * @property \HarderWork\FootballData\Model\Table\SeasonsTable|\Cake\ORM\Association\BelongsTo $Seasons
 *
 * @method \HarderWork\FootballData\Model\Entity\TeamResult get($primaryKey, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult newEntity($data = null, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult[] newEntities(array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult[] patchEntities($entities, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\TeamResult findOrCreate($search, callable $callback = null, $options = [])
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

    public function getTeamsInLeague($leagueId, $seasonId)
    {
        $query = $this->find();
        $query->select(['TeamResults.team_id', 'Teams.name'])
            ->distinct(['TeamResults.team_id'])
            ->where(['TeamResults.league_id' => $leagueId, 'TeamResults.season_id' => $seasonId])
            ->order(['Teamresults.team_id'])
            ->contain(['Teams']);
        return $query->cache(sprintf(
            'teamresults_teams_%s_%s',
            $leagueId, $seasonId),
            'footballdata');
    }

	public function getOverallTable($leagueId, $seasonId, $whichGames, $toDate, $gamePlayed)
    {
        $query = $this->find();
        $goalDiff = $query->newExpr()->add('SUM(TeamResults.goals_for - TeamResults.goals_against)');
        $sort = $query->newExpr()->add('SUM(points) * 10000 + SUM(TeamResults.goals_for - TeamResults.goals_against) * 10 + SUM(win)');
        $query = $query
            ->select([
                'Teams.id',
                'Teams.name',
                'GP' => $query->func()->sum('TeamResults.game_played', ['integer']),
                'W'  => $query->func()->sum('TeamResults.win', ['integer']),
                'D'  => $query->func()->sum('TeamResults.draw', ['integer']),
                'L'  => $query->func()->sum('TeamResults.loss', ['integer']),
                'GF' => $query->func()->sum('TeamResults.goals_for', ['integer']),
                'GA' => $query->func()->sum('TeamResults.goals_against', ['integer']),
                'Diff' => $goalDiff,
                'Points' => $query->func()->sum('TeamResults.points', ['integer']),
                'Sort' => $sort,
                ])
            ->where([
                'TeamResults.league_id' => $leagueId,
                'TeamResults.season_id' => $seasonId,
                'TeamResults.game_date <' => $toDate,
                'TeamResults.game_played >=' => $gamePlayed,
                ])
            ->group('Teams.id')
            ->order(['"Sort" DESC', 'Teams.name ASC'])
            ->contain(['Teams']);
        switch ($whichGames) {
            case 'home':
                $query->where(['TeamResults.home_team' => 1]);
                break;
            case 'away':
                $query->where(['TeamResults.away_team' => 1]);
                break;
            default:
                # code...
                break;
        }

        return $query->cache(sprintf(
            'getOverallTable_%s_%s_%s_%s_%s',
            $leagueId, $seasonId, $whichGames, $toDate, $gamePlayed),
            'footballdata');
	}

}
