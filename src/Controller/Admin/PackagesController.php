<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Packages Controller
 *
 * @property \App\Model\Table\PackagesTable $Packages
 */
class PackagesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('packages', $this->paginate($this->Packages));
        $this->set('_serialize', ['packages']);
    }

    /**
     * View method
     *
     * @param string|null $id Package id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $package = $this->Packages->get($id, [
            'contain' => []
        ]);
        $this->set('package', $package);
        $this->set('_serialize', ['package']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $package = $this->Packages->newEntity();
        if ($this->request->is('post')) {
            $package = $this->Packages->patchEntity($package, $this->request->data);
            if ($this->Packages->save($package)) {
                $this->Flash->success(__('The package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The package could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('package'));
        $this->set('_serialize', ['package']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Package id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $package = $this->Packages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $package = $this->Packages->patchEntity($package, $this->request->data);
            if ($this->Packages->save($package)) {
                $this->Flash->success(__('The package has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The package could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('package'));
        $this->set('_serialize', ['package']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Package id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $package = $this->Packages->get($id);
        if ($this->Packages->delete($package)) {
            $this->Flash->success(__('The package has been deleted.'));
        } else {
            $this->Flash->error(__('The package could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
