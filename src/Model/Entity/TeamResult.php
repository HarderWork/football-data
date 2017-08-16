<?php
namespace FootballData\Model\Entity;

use Cake\ORM\Entity;

/**
 * TeamResult Entity
 *
 * @property int $id
 * @property int $team_id
 * @property int $fixture_id
 * @property \Cake\I18n\FrozenDate $game_date
 * @property int $league_id
 * @property int $season_id
 * @property int $round
 * @property int $home_team
 * @property int $game_played
 * @property int $win
 * @property int $draw
 * @property int $loss
 * @property int $goals_for
 * @property int $goals_against
 * @property int $points
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \FootballData\Model\Entity\Team $team
 * @property \FootballData\Model\Entity\Fixture $fixture
 * @property \FootballData\Model\Entity\League $league
 * @property \FootballData\Model\Entity\Season $season
 */
class TeamResult extends Entity
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
