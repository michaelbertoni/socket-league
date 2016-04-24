<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stades Controller
 *
 * @property \App\Model\Table\StadesTable $Stades
 */
class StadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $stades = $this->paginate($this->Stades);

        $this->set(compact('stades'));
        $this->set('_serialize', ['stades']);
    }

    /**
     * View method
     *
     * @param string|null $id Stade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $stade = $this->Stades->get($id, [
            'contain' => []
        ]);

        $this->set('stade', $stade);
        $this->set('_serialize', ['stade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $stade = $this->Stades->newEntity();
        if ($this->request->is('post')) {
            $stade = $this->Stades->patchEntity($stade, $this->request->data);
            if ($this->Stades->save($stade)) {
                $this->Flash->success(__('The stade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('stade'));
        $this->set('_serialize', ['stade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $stade = $this->Stades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stade = $this->Stades->patchEntity($stade, $this->request->data);
            if ($this->Stades->save($stade)) {
                $this->Flash->success(__('The stade has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The stade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('stade'));
        $this->set('_serialize', ['stade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $this->request->allowMethod(['post', 'delete']);
        $stade = $this->Stades->get($id);
        if ($this->Stades->delete($stade)) {
            $this->Flash->success(__('The stade has been deleted.'));
        } else {
            $this->Flash->error(__('The stade could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
