<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * JobTypes Controller
 *
 * @property \App\Model\Table\JobTypesTable $JobTypes
 */
class JobTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('jobTypes', $this->paginate($this->JobTypes));
        $this->set('_serialize', ['jobTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Job Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobType = $this->JobTypes->get($id, [
            'contain' => ['Jobs']
        ]);
        $this->set('jobType', $jobType);
        $this->set('_serialize', ['jobType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobType = $this->JobTypes->newEntity();
        if ($this->request->is('post')) {
            $jobType = $this->JobTypes->patchEntity($jobType, $this->request->data);
            if ($this->JobTypes->save($jobType)) {
                $this->Flash->success(__('The job type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobType'));
        $this->set('_serialize', ['jobType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobType = $this->JobTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobType = $this->JobTypes->patchEntity($jobType, $this->request->data);
            if ($this->JobTypes->save($jobType)) {
                $this->Flash->success(__('The job type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobType'));
        $this->set('_serialize', ['jobType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobType = $this->JobTypes->get($id);
        if ($this->JobTypes->delete($jobType)) {
            $this->Flash->success(__('The job type has been deleted.'));
        } else {
            $this->Flash->error(__('The job type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
