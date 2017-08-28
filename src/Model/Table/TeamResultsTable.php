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

	public function getOverallTable($leagueId, $seasonId, $homeGames, $awayGames, $toDate, $gamePlayed) {
       $query = $this->find();
       $goalDiff = $query->newExpr()->add('SUM(TeamResults.goals_for - TeamResults.goals_against)');
       $sort = $query->newExpr()->add('SUM(points) * 10000 + SUM(TeamResults.goals_for - TeamResults.goals_against) * 10 + SUM(win)');
       return $query
           ->select([
               'Teams.id',
               'Teams.name',
               'GP' => $query->func()->sum('TeamResults.game_played'),
               'W' => $query->func()->sum('TeamResults.win', ['integer']),
               'D' => $query->func()->sum('TeamResults.draw'),
               'L' => $query->func()->sum('TeamResults.loss'),  
               'GF' => $query->func()->sum('TeamResults.goals_for'),
               'GA' => $query->func()->sum('TeamResults.goals_against'),
               'Diff' => $goalDiff,
               'Points' => $query->func()->sum('TeamResults.points'),
               'Sort' => $sort,
               ])
           ->where([
               'TeamResults.league_id' => $leagueId,
               'TeamResults.season_id' => $seasonId])
           ->group('Teams.id')
           ->order(['"Sort" DESC', 'Teams.name ASC'])
           ->contain(['Teams']);
        /*
		$cacheId = 'overalltable_' . $leagueId . '_' . $seasonId . '_' . $homeGames . '_' . $awayGames . '_' . $toDate . '_' . $gamePlayed;
		$result = Cache::read($cacheId, 'results');
		if (!$result) {
			$condition1 = array('"TeamResult"."league_id"' => $leagueId, '"TeamResult"."season_id"' => $seasonId ); 
			$condition2 = array('"TeamResult"."bHomeTeam"' => $homeGames);
			$condition3 = array('"TeamResult"."bHomeTeam"' => $awayGames);
			$condition4 = array('"TeamResult"."dGameDate" <' => $toDate);
			$condition5 = array('"TeamResult"."bGamePlayed" >=' => $gamePlayed);
			$conditions = array($condition1, array('OR' => array($condition2, $condition3), $condition4, $condition5));
			$fields = array('"Team"."id"', '"Team"."name"', 'SUM( "TeamResult"."bGamePlayed" ) AS "GP"', 
							'SUM( "TeamResult"."bWon" ) AS "W", SUM( "TeamResult"."bDraw" ) AS "D", SUM( "TeamResult"."bLoss" ) AS "L"', 
							'SUM( "TeamResult"."iGoalsForward" ) AS "GF", SUM( "TeamResult"."iGoalsAgainst" ) AS "GA"',
							'SUM( "TeamResult"."iGoalsForward" - "TeamResult"."iGoalsAgainst" ) AS "Diff"',
							'SUM( "TeamResult"."iPoints" ) AS "Points"',
							'SUM( "iPoints" )*10000 + SUM( "iGoalsForward" - "iGoalsAgainst" )*10 + SUM( "bWon" ) as "Sort"');
			// Get all teams from league and season and se if anyone is missing
			$leagueTeams = $this->getTeamsInLeague($leagueId, $seasonId);
			$table = $this->find('all', array('fields' => $fields, 
											'conditions' => $conditions,
											'group' => '"Team"."id"', 
											'order'=> array(
												'"Points" DESC', 
												'"Diff" DESC', 
												'"GF" DESC',
												'"GA" ASC',
												'"W" DESC',
												'"Team"."name" ASC' )));
			// Now, check if we need to manually add teams
			// This happens in the beginning of a season if one team has no games played at all, at home or away
			if (count($leagueTeams) != count($table)){
				foreach ($leagueTeams as $team) {
					$add = True;
					foreach ($table as $tableTeam) {
						if ($team['Team']['name'] == $tableTeam['Team']['name']) {
							$add = false;
							break;
						}
					}
					if ($add) {
						$row = $this->__formatEmptyRow($team['Team']['name'], $team['TeamResult']['team_id'], 0);
						array_push($table, $row);
					}
				};
				// We need to re-sort it
				$table = Set::sort($table, '{n}.Team.name', 'desc');
				foreach($table as $key => $row) {
					// Increase sort param with position based on name to get sort order alfabetically
					$table[$key][0]['Sort'] += $key;
				}
				$table = Set::sort($table, '{n}.0.Sort', 'desc');
			}
			$result = $table;
			Cache::write($cacheId, $result, 'results');
		}
        */
		return $result;
	}

}
