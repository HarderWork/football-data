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
 * @property \HarderWork\FootballData\Model\Entity\Fixture[] $fixtures
 * @property \HarderWork\FootballData\Model\Entity\League[] $leagues
 * @property \HarderWork\FootballData\Model\Entity\TeamResult[] $team_results
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
