<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * PageContents Controller
 *
 * @property \App\Model\Table\PageContentsTable $PageContents
 */
class PageContentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pageContents', $this->paginate($this->PageContents));
        $this->set('_serialize', ['pageContents']);
    }

    /**
     * View method
     *
     * @param string|null $id Page Content id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pageContent = $this->PageContents->get($id, [
            'contain' => []
        ]);
        $this->set('pageContent', $pageContent);
        $this->set('_serialize', ['pageContent']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pageContent = $this->PageContents->newEntity();
        if ($this->request->is('post')) {
            $pageContent = $this->PageContents->patchEntity($pageContent, $this->request->data);
            if ($this->PageContents->save($pageContent)) {
                $this->Flash->success(__('The page content has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page content could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pageContent'));
        $this->set('_serialize', ['pageContent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Page Content id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pageContent = $this->PageContents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pageContent = $this->PageContents->patchEntity($pageContent, $this->request->data);
            if ($this->PageContents->save($pageContent)) {
                $this->Flash->success(__('The page content has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The page content could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pageContent'));
        $this->set('_serialize', ['pageContent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Page Content id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pageContent = $this->PageContents->get($id);
        if ($this->PageContents->delete($pageContent)) {
            $this->Flash->success(__('The page content has been deleted.'));
        } else {
            $this->Flash->error(__('The page content could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
