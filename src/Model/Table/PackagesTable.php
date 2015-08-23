<?php
namespace App\Model\Table;

use App\Model\Entity\Package;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Packages Model
 *
 */
class PackagesTable extends Table
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

        $this->table('packages');
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
            ->add('package_name', 'valid', ['rule' => 'numeric'])
            ->requirePresence('package_name', 'create')
            ->notEmpty('package_name');

        $validator
            ->requirePresence('package_description', 'create')
            ->notEmpty('package_description');

        $validator
            ->add('package_price', 'valid', ['rule' => 'numeric'])
            ->requirePresence('package_price', 'create')
            ->notEmpty('package_price');

        $validator
            ->add('package_status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('package_status', 'create')
            ->notEmpty('package_status');

        return $validator;
    }
}
