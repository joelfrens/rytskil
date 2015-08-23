<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * AgencyRecommendations Controller
 *
 * @property \App\Model\Table\AgencyRecommendationsTable $AgencyRecommendations
 */
class AgencyRecommendationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies', 'Candidates']
        ];
        $this->set('agencyRecommendations', $this->paginate($this->AgencyRecommendations));
        $this->set('_serialize', ['agencyRecommendations']);
    }

    /**
     * View method
     *
     * @param string|null $id Agency Recommendation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agencyRecommendation = $this->AgencyRecommendations->get($id, [
            'contain' => ['Agencies', 'Candidates']
        ]);
        $this->set('agencyRecommendation', $agencyRecommendation);
        $this->set('_serialize', ['agencyRecommendation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agencyRecommendation = $this->AgencyRecommendations->newEntity();
        if ($this->request->is('post')) {
            $agencyRecommendation = $this->AgencyRecommendations->patchEntity($agencyRecommendation, $this->request->data);
            if ($this->AgencyRecommendations->save($agencyRecommendation)) {
                $this->Flash->success(__('The agency recommendation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The agency recommendation could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->AgencyRecommendations->Agencies->find('list', ['limit' => 200]);
        $candidates = $this->AgencyRecommendations->Candidates->find('list', ['limit' => 200]);
        $this->set(compact('agencyRecommendation', 'agencies', 'candidates'));
        $this->set('_serialize', ['agencyRecommendation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Agency Recommendation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agencyRecommendation = $this->AgencyRecommendations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agencyRecommendation = $this->AgencyRecommendations->patchEntity($agencyRecommendation, $this->request->data);
            if ($this->AgencyRecommendations->save($agencyRecommendation)) {
                $this->Flash->success(__('The agency recommendation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The agency recommendation could not be saved. Please, try again.'));
            }
        }
        $agencies = $this->AgencyRecommendations->Agencies->find('list', ['limit' => 200]);
        $candidates = $this->AgencyRecommendations->Candidates->find('list', ['limit' => 200]);
        $this->set(compact('agencyRecommendation', 'agencies', 'candidates'));
        $this->set('_serialize', ['agencyRecommendation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Agency Recommendation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agencyRecommendation = $this->AgencyRecommendations->get($id);
        if ($this->AgencyRecommendations->delete($agencyRecommendation)) {
            $this->Flash->success(__('The agency recommendation has been deleted.'));
        } else {
            $this->Flash->error(__('The agency recommendation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
