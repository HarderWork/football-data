<?php
namespace HarderWork\FootballData\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $name
 * @property int $league_id
 * @property string $logo
 * @property int $xmlsoccer_teamid
 * @property int $footballdata_teamid
 * @property string $country
 * @property string $stadium
 * @property string $home_page_url
 * @property string $wiki_url
 * @property int $squad_market_value
 * @property string $crest_url
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \FootballData\Model\Entity\League $league
 * @property \FootballData\Model\Entity\TeamAlias[] $team_aliases
 * @property \FootballData\Model\Entity\TeamResult[] $team_results
 */
class Team extends Entity
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
