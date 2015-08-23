<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserCvs Controller
 *
 * @property \App\Model\Table\UserCvsTable $UserCvs
 */
class UserCvsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('userCvs', $this->paginate($this->UserCvs));
        $this->set('_serialize', ['userCvs']);
    }

    /**
     * View method
     *
     * @param string|null $id User Cv id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userCv = $this->UserCvs->get($id, [
            'contain' => ['Users', 'JobApplications']
        ]);
        $this->set('userCv', $userCv);
        $this->set('_serialize', ['userCv']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userCv = $this->UserCvs->newEntity();
        if ($this->request->is('post')) {
            $userCv = $this->UserCvs->patchEntity($userCv, $this->request->data);
            if ($this->UserCvs->save($userCv)) {
                $this->Flash->success(__('The user cv has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user cv could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserCvs->Users->find('list', ['limit' => 200]);
        $this->set(compact('userCv', 'users'));
        $this->set('_serialize', ['userCv']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Cv id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userCv = $this->UserCvs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userCv = $this->UserCvs->patchEntity($userCv, $this->request->data);
            if ($this->UserCvs->save($userCv)) {
                $this->Flash->success(__('The user cv has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user cv could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserCvs->Users->find('list', ['limit' => 200]);
        $this->set(compact('userCv', 'users'));
        $this->set('_serialize', ['userCv']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Cv id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userCv = $this->UserCvs->get($id);
        if ($this->UserCvs->delete($userCv)) {
            $this->Flash->success(__('The user cv has been deleted.'));
        } else {
            $this->Flash->error(__('The user cv could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
