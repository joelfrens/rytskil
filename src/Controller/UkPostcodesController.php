<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UkPostcodes Controller
 *
 * @property \App\Model\Table\UkPostcodesTable $UkPostcodes
 */
class UkPostcodesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('ukPostcodes', $this->paginate($this->UkPostcodes));
        $this->set('_serialize', ['ukPostcodes']);
    }

    /**
     * View method
     *
     * @param string|null $id Uk Postcode id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ukPostcode = $this->UkPostcodes->get($id, [
            'contain' => []
        ]);
        $this->set('ukPostcode', $ukPostcode);
        $this->set('_serialize', ['ukPostcode']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ukPostcode = $this->UkPostcodes->newEntity();
        if ($this->request->is('post')) {
            $ukPostcode = $this->UkPostcodes->patchEntity($ukPostcode, $this->request->data);
            if ($this->UkPostcodes->save($ukPostcode)) {
                $this->Flash->success(__('The uk postcode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uk postcode could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ukPostcode'));
        $this->set('_serialize', ['ukPostcode']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Uk Postcode id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ukPostcode = $this->UkPostcodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ukPostcode = $this->UkPostcodes->patchEntity($ukPostcode, $this->request->data);
            if ($this->UkPostcodes->save($ukPostcode)) {
                $this->Flash->success(__('The uk postcode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The uk postcode could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ukPostcode'));
        $this->set('_serialize', ['ukPostcode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Uk Postcode id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ukPostcode = $this->UkPostcodes->get($id);
        if ($this->UkPostcodes->delete($ukPostcode)) {
            $this->Flash->success(__('The uk postcode has been deleted.'));
        } else {
            $this->Flash->error(__('The uk postcode could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
