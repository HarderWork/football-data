<?php
namespace HarderWork\FootballData\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fixture Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $game_date
 * @property \Cake\I18n\FrozenTime $game_start
 * @property int $league_id
 * @property int $season_id
 * @property int $round
 * @property int $home_team_id
 * @property int $away_team_id
 * @property int $home_goals
 * @property int $away_goals
 * @property int $status
 * @property int $source
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \HarderWork\FootballData\Model\Entity\League $league
 * @property \HarderWork\FootballData\Model\Entity\Season $season
 * @property \HarderWork\FootballData\Model\Entity\HomeTeam $home_team
 * @property \HarderWork\FootballData\Model\Entity\AwayTeam $away_team
 * @property \HarderWork\FootballData\Model\Entity\TeamResult[] $team_results
 */
class Fixture extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
