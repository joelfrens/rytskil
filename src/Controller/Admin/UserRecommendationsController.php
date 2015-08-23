<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserRecommendations Controller
 *
 * @property \App\Model\Table\UserRecommendationsTable $UserRecommendations
 */
class UserRecommendationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Candidates']
        ];
        $this->set('userRecommendations', $this->paginate($this->UserRecommendations));
        $this->set('_serialize', ['userRecommendations']);
    }

    /**
     * View method
     *
     * @param string|null $id User Recommendation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userRecommendation = $this->UserRecommendations->get($id, [
            'contain' => ['Users', 'Candidates']
        ]);
        $this->set('userRecommendation', $userRecommendation);
        $this->set('_serialize', ['userRecommendation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRecommendation = $this->UserRecommendations->newEntity();
        if ($this->request->is('post')) {
            $userRecommendation = $this->UserRecommendations->patchEntity($userRecommendation, $this->request->data);
            if ($this->UserRecommendations->save($userRecommendation)) {
                $this->Flash->success(__('The user recommendation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user recommendation could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserRecommendations->Users->find('list', ['limit' => 200]);
        $candidates = $this->UserRecommendations->Candidates->find('list', ['limit' => 200]);
        $this->set(compact('userRecommendation', 'users', 'candidates'));
        $this->set('_serialize', ['userRecommendation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Recommendation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRecommendation = $this->UserRecommendations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRecommendation = $this->UserRecommendations->patchEntity($userRecommendation, $this->request->data);
            if ($this->UserRecommendations->save($userRecommendation)) {
                $this->Flash->success(__('The user recommendation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user recommendation could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserRecommendations->Users->find('list', ['limit' => 200]);
        $candidates = $this->UserRecommendations->Candidates->find('list', ['limit' => 200]);
        $this->set(compact('userRecommendation', 'users', 'candidates'));
        $this->set('_serialize', ['userRecommendation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Recommendation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRecommendation = $this->UserRecommendations->get($id);
        if ($this->UserRecommendations->delete($userRecommendation)) {
            $this->Flash->success(__('The user recommendation has been deleted.'));
        } else {
            $this->Flash->error(__('The user recommendation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
