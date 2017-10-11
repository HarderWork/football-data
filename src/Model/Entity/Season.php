<?php
namespace HarderWork\FootballData\Model\Entity;

use Cake\ORM\Entity;

/**
 * Season Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \FootballData\Model\Entity\Fixture[] $fixtures
 * @property \FootballData\Model\Entity\League[] $leagues
 * @property \FootballData\Model\Entity\PoolDivider[] $pool_dividers
 * @property \FootballData\Model\Entity\PoolLeague[] $pool_leagues
 * @property \FootballData\Model\Entity\PoolPlayedGame[] $pool_played_games
 * @property \FootballData\Model\Entity\PoolTeamResult[] $pool_team_results
 * @property \FootballData\Model\Entity\TeamResult[] $team_results
 */
class Season extends Entity
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
