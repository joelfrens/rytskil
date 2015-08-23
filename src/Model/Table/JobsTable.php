<?php
namespace App\Model\Table;

use App\Model\Entity\Job;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Agencies
 * @property \Cake\ORM\Association\BelongsTo $UkPostcodes
 * @property \Cake\ORM\Association\BelongsTo $JobTypes
 * @property \Cake\ORM\Association\HasMany $Comments
 * @property \Cake\ORM\Association\HasMany $JobApplications
 */
class JobsTable extends Table
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

        $this->table('jobs');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Agencies', [
            'foreignKey' => 'agency_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UkPostcodes', [
            'foreignKey' => 'uk_postcode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('JobTypes', [
            'foreignKey' => 'job_type_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'job_id'
        ]);
        $this->hasMany('JobApplications', [
            'foreignKey' => 'job_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('job_title', 'create')
            ->notEmpty('job_title');

        $validator
            ->requirePresence('job_description', 'create')
            ->notEmpty('job_description');

        $validator
            ->requirePresence('salary', 'create')
            ->notEmpty('salary');

        $validator
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_created', 'create')
            ->notEmpty('date_created');

        $validator
            ->add('expiry_date', 'valid', ['rule' => 'datetime'])
            ->requirePresence('expiry_date', 'create')
            ->notEmpty('expiry_date');

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
        $rules->add($rules->existsIn(['agency_id'], 'Agencies'));
        $rules->add($rules->existsIn(['uk_postcode_id'], 'UkPostcodes'));
        $rules->add($rules->existsIn(['job_type_id'], 'JobTypes'));
        return $rules;
    }
}
