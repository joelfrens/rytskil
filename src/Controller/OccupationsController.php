<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupations Controller
 *
 * @property \App\Model\Table\OccupationsTable $Occupations
 */
class OccupationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentOccupations']
        ];
        $this->set('occupations', $this->paginate($this->Occupations));
        $this->set('_serialize', ['occupations']);
    }

    /**
     * View method
     *
     * @param string|null $id Occupation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => ['ParentOccupations', 'ChildOccupations']
        ]);
        $this->set('occupation', $occupation);
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupation = $this->Occupations->newEntity();
        if ($this->request->is('post')) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
            }
        }
        $parentOccupations = $this->Occupations->ParentOccupations->find('list', ['limit' => 200]);
        $this->set(compact('occupation', 'parentOccupations'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
            }
        }
        $parentOccupations = $this->Occupations->ParentOccupations->find('list', ['limit' => 200]);
        $this->set(compact('occupation', 'parentOccupations'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupation = $this->Occupations->get($id);
        if ($this->Occupations->delete($occupation)) {
            $this->Flash->success(__('The occupation has been deleted.'));
        } else {
            $this->Flash->error(__('The occupation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
