<?php
namespace App\Model\Table;

use App\Model\Entity\PageContent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PageContents Model
 *
 */
class PageContentsTable extends Table
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

        $this->table('page_contents');
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
            ->requirePresence('page_title', 'create')
            ->notEmpty('page_title');

        $validator
            ->requirePresence('page_description', 'create')
            ->notEmpty('page_description');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_created', 'create')
            ->notEmpty('date_created');

        return $validator;
    }
}
