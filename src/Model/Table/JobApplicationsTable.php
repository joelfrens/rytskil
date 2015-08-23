<?php
namespace App\Model\Table;

use App\Model\Entity\JobApplication;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JobApplications Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Jobs
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $UserCvs
 */
class JobApplicationsTable extends Table
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

        $this->table('job_applications');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserCvs', [
            'foreignKey' => 'user_cv_id',
            'joinType' => 'INNER'
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
            ->requirePresence('custom_message', 'create')
            ->notEmpty('custom_message');

        $validator
            ->add('date_applied', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_applied', 'create')
            ->notEmpty('date_applied');

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
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['user_cv_id'], 'UserCvs'));
        return $rules;
    }
}
