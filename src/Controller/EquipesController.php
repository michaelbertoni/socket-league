<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipes Controller
 *
 * @property \App\Model\Table\EquipesTable $Equipes
 * @property \App\Model\Table\StadesTable $Stades
 */
class EquipesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        if(session_id() == "") {
            session_start();}
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $equipes = $this->paginate($this->Equipes);

        $this->set(compact('equipes'));
        $this->set('_serialize', ['equipes']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if(session_id() == "") {
            session_start();}
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $equipe = $this->Equipes->get($id, [
            'contain' => ['Competitions', 'Stades']
        ]);

        $this->set('equipe', $equipe);
        $this->set('_serialize', ['equipe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if(session_id() == "") {
            session_start();}
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $equipe = $this->Equipes->newEntity();
        if ($this->request->is('post')) {
            $equipe = $this->Equipes->patchEntity($equipe, $this->request->data);
            if ($this->Equipes->save($equipe)) {
                $this->Flash->success(__('The equipe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipe could not be saved. Please, try again.'));
            }
        }
        $competitions = $this->Equipes->Competitions->find('all', ['limit' => 200]);
        $this->set(compact('equipe', 'competitions'));
        $this->set('_serialize', ['equipe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if(session_id() == "") {
            session_start();}
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $equipe = $this->Equipes->get($id, [
            'contain' => ['Competitions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipe = $this->Equipes->patchEntity($equipe, $this->request->data);
            if ($this->Equipes->save($equipe)) {
                $this->Flash->success(__('The equipe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipe could not be saved. Please, try again.'));
            }
        }
        $competitions = $this->Equipes->Competitions->find('all', ['limit' => 200]);
        $this->set(compact('equipe', 'competitions'));
        $this->set('_serialize', ['equipe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if(session_id() == "") {
            session_start();}
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
        $this->request->allowMethod(['post', 'delete']);
        $equipe = $this->Equipes->get($id);
        if ($this->Equipes->delete($equipe)) {
            $this->Flash->success(__('The equipe has been deleted.'));
        } else {
            $this->Flash->error(__('The equipe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function detailequipe($id)
    {
        $equipe = $this->Equipes->get($id, [
            'contain' => ['Stades', 'Matchs', 'Matchs.Domicile', 'Matchs.Visiteur', 'Matchs.Journees', 'Matchs.Journees.Competitions']
        ]);

        $this->set('equipefront', $equipe);
        $this->set('_serialize', ['equipefront']);

    }
}
