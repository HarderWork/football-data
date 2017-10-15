<?php
namespace HarderWork\FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seasons Model
 *
 * @property \HarderWork\FootballData\Model\Table\FixturesTable|\Cake\ORM\Association\HasMany $Fixtures
 * @property \HarderWork\FootballData\Model\Table\LeaguesTable|\Cake\ORM\Association\HasMany $Leagues
 * @property \HarderWork\FootballData\Model\Table\TeamResultsTable|\Cake\ORM\Association\HasMany $TeamResults
 *
 * @method \HarderWork\FootballData\Model\Entity\Season get($primaryKey, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season newEntity($data = null, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season[] newEntities(array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season[] patchEntities($entities, array $data, array $options = [])
 * @method \HarderWork\FootballData\Model\Entity\Season findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SeasonsTable extends Table
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

        $this->setTable('seasons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Fixtures', [
            'foreignKey' => 'season_id',
            'className' => 'FootballData.Fixtures'
        ]);
        $this->hasMany('Leagues', [
            'foreignKey' => 'season_id',
            'className' => 'FootballData.Leagues'
        ]);
        $this->hasMany('TeamResults', [
            'foreignKey' => 'season_id',
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

        return $validator;
    }
}
