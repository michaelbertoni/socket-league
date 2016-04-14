<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Journees Controller
 *
 * @property \App\Model\Table\JourneesTable $Journees
 */
class JourneesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $journees = $this->paginate($this->Journees);

        $this->set(compact('journees'));
        $this->set('_serialize', ['journees']);
    }

    /**
     * View method
     *
     * @param string|null $id Journee id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $journee = $this->Journees->get($id, [
            'contain' => ['Matchs']
        ]);

        $this->set('journee', $journee);
        $this->set('_serialize', ['journee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $journee = $this->Journees->newEntity();
        if ($this->request->is('post')) {
            $journee = $this->Journees->patchEntity($journee, $this->request->data);
            if ($this->Journees->save($journee)) {
                $this->Flash->success(__('The journee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The journee could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('journee'));
        $this->set('_serialize', ['journee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Journee id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $journee = $this->Journees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $journee = $this->Journees->patchEntity($journee, $this->request->data);
            if ($this->Journees->save($journee)) {
                $this->Flash->success(__('The journee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The journee could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('journee'));
        $this->set('_serialize', ['journee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Journee id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $journee = $this->Journees->get($id);
        if ($this->Journees->delete($journee)) {
            $this->Flash->success(__('The journee has been deleted.'));
        } else {
            $this->Flash->error(__('The journee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function competitions()
    {
        // La clé 'pass' est fournie par CakePHP et contient tous les segments
        // d'URL de la "request" (instance de \Cake\Network\Request)
        $competitions = $this->request->params['pass'];

        // On utilise l'objet "Bookmarks" (une instance de
        // \App\Model\Table\BookmarksTable) pour récupérer les bookmarks avec
        // ces tags
        $journees = $this->Journees->find('competitions', [
            'competitions' => $competitions
        ]);

        // Passe les variables au template de vue (view).
        $this->set([
            'journees' => $journees,
            'competitions' => $competitions
        ]);
    }
}
