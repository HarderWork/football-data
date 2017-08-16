<?php
namespace FootballData\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TeamAliases Model
 *
 * @property \FootballData\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 *
 * @method \FootballData\Model\Entity\TeamAlias get($primaryKey, $options = [])
 * @method \FootballData\Model\Entity\TeamAlias newEntity($data = null, array $options = [])
 * @method \FootballData\Model\Entity\TeamAlias[] newEntities(array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamAlias|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \FootballData\Model\Entity\TeamAlias patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamAlias[] patchEntities($entities, array $data, array $options = [])
 * @method \FootballData\Model\Entity\TeamAlias findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TeamAliasesTable extends Table
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

        $this->setTable('team_aliases');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id',
            'joinType' => 'INNER',
            'className' => 'FootballData.Teams'
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

        return $rules;
    }
}
