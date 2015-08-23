<?php
namespace App\Model\Table;

use App\Model\Entity\UkPostcode;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UkPostcodes Model
 *
 */
class UkPostcodesTable extends Table
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

        $this->table('uk_postcodes');
        $this->displayField('postcode');
        $this->primaryKey('postcode');
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
            ->allowEmpty('postcode', 'create');

        $validator
            ->add('eastings', 'valid', ['rule' => 'numeric'])
            ->requirePresence('eastings', 'create')
            ->notEmpty('eastings');

        $validator
            ->add('northings', 'valid', ['rule' => 'numeric'])
            ->requirePresence('northings', 'create')
            ->notEmpty('northings');

        $validator
            ->add('latitude', 'valid', ['rule' => 'decimal'])
            ->requirePresence('latitude', 'create')
            ->notEmpty('latitude');

        $validator
            ->add('longitude', 'valid', ['rule' => 'decimal'])
            ->requirePresence('longitude', 'create')
            ->notEmpty('longitude');

        $validator
            ->allowEmpty('town');

        $validator
            ->allowEmpty('region');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->requirePresence('country_string', 'create')
            ->notEmpty('country_string');

        return $validator;
    }
}
