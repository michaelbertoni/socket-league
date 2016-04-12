<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matchs Controller
 *
 * @property \App\Model\Table\MatchsTable $Matchs
 */
class MatchsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $matchs = $this->paginate($this->Matchs);

        $this->set(compact('matchs'));
        $this->set('_serialize', ['matchs']);
    }

    /**
     * View method
     *
     * @param string|null $id Match id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $match = $this->Matchs->get($id, [
            'contain' => []
        ]);

        $this->set('match', $match);
        $this->set('_serialize', ['match']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $match = $this->Matchs->newEntity();
        if ($this->request->is('post')) {
            $match = $this->Matchs->patchEntity($match, $this->request->data);
            if ($this->Matchs->save($match)) {
                $this->Flash->success(__('The match has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The match could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('match'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Match id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $match = $this->Matchs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $match = $this->Matchs->patchEntity($match, $this->request->data);
            if ($this->Matchs->save($match)) {
                $this->Flash->success(__('The match has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The match could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('match'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Match id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $match = $this->Matchs->get($id);
        if ($this->Matchs->delete($match)) {
            $this->Flash->success(__('The match has been deleted.'));
        } else {
            $this->Flash->error(__('The match could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
