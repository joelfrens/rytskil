<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * JobApplications Controller
 *
 * @property \App\Model\Table\JobApplicationsTable $JobApplications
 */
class JobApplicationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Jobs', 'Users', 'UserCvs']
        ];
        $this->set('jobApplications', $this->paginate($this->JobApplications));
        $this->set('_serialize', ['jobApplications']);
    }

    /**
     * View method
     *
     * @param string|null $id Job Application id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobApplication = $this->JobApplications->get($id, [
            'contain' => ['Jobs', 'Users', 'UserCvs']
        ]);
        $this->set('jobApplication', $jobApplication);
        $this->set('_serialize', ['jobApplication']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobApplication = $this->JobApplications->newEntity();
        if ($this->request->is('post')) {
            $jobApplication = $this->JobApplications->patchEntity($jobApplication, $this->request->data);
            if ($this->JobApplications->save($jobApplication)) {
                $this->Flash->success(__('The job application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job application could not be saved. Please, try again.'));
            }
        }
        $jobs = $this->JobApplications->Jobs->find('list', ['limit' => 200]);
        $users = $this->JobApplications->Users->find('list', ['limit' => 200]);
        $userCvs = $this->JobApplications->UserCvs->find('list', ['limit' => 200]);
        $this->set(compact('jobApplication', 'jobs', 'users', 'userCvs'));
        $this->set('_serialize', ['jobApplication']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Application id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobApplication = $this->JobApplications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobApplication = $this->JobApplications->patchEntity($jobApplication, $this->request->data);
            if ($this->JobApplications->save($jobApplication)) {
                $this->Flash->success(__('The job application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job application could not be saved. Please, try again.'));
            }
        }
        $jobs = $this->JobApplications->Jobs->find('list', ['limit' => 200]);
        $users = $this->JobApplications->Users->find('list', ['limit' => 200]);
        $userCvs = $this->JobApplications->UserCvs->find('list', ['limit' => 200]);
        $this->set(compact('jobApplication', 'jobs', 'users', 'userCvs'));
        $this->set('_serialize', ['jobApplication']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Application id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobApplication = $this->JobApplications->get($id);
        if ($this->JobApplications->delete($jobApplication)) {
            $this->Flash->success(__('The job application has been deleted.'));
        } else {
            $this->Flash->error(__('The job application could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
