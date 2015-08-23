<?php
namespace App\Model\Table;

use App\Model\Entity\Agency;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencies Model
 *
 */
class AgenciesTable extends Table
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

        $this->table('agencies');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('agency_name', 'create')
            ->notEmpty('agency_name');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->add('created_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('created_date', 'create')
            ->notEmpty('created_date');

        $validator
            ->requirePresence('postcode', 'create')
            ->notEmpty('postcode');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number');

        $validator
            ->add('state', 'valid', ['rule' => 'numeric'])
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->add('city', 'valid', ['rule' => 'numeric'])
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->add('country', 'valid', ['rule' => 'numeric'])
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
