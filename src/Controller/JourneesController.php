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
    public function initialize()
    {
        parent::initialize();
    }

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

    public function resultatsFromCompetition($id = null)
    {
        // Recherche de l'ID de la dernière journée du championnat
        $journeeCompetition = $this->Journees->find('list')
            ->select(['id'])
            ->where(['Competition_idCompetition' => $id])
            ->order(['id' => 'DESC'])
            ->first();

        // redirection vers l'action resultats du controller
        $this->redirect(['action' => 'resultats', $journeeCompetition]);
    }

    public function resultats($id = null)
    {
        // Recherche de la journée
        $journee = $this->Journees->get($id);

        // Recherche des matchs de la journée
        $matchsJournee = $this->Journees->Matchs->find()
                ->select([
                        'id' => 'Matchs.id',
                        'dateMatch' => 'Matchs.dateMatch',
                        'equipeDomicile' => 'Domicile.nomCourt',
                        'scoreDomicile' => 'Matchs.scoreEquipeDomicile',
                        'equipeVisiteur' => 'Visiteur.nomCourt',
                        'scoreVisiteur' => 'Matchs.scoreEquipeVisiteur',
                    ])
                ->join([
                        'table' => 'equipes',
                        'alias' => 'Domicile',
                        'type' => 'INNER',
                        'conditions' => 'Matchs.EquipeDomicile_idEquipe = Domicile.id',
                    ])
                ->join([
                        'table' => 'equipes',
                        'alias' => 'Visiteur',
                        'type' => 'INNER',
                        'conditions' => 'Matchs.EquipeVisiteur_idEquipe = Visiteur.id',
                    ])
                ->where(['Journée_idJournée' => $id]);

        // Recherche de la compétition concernée
        $competition = $this->Journees->Competitions->get($journee->Competition_idCompetition);

        $journeesCompetition = $this->Journees->find()
            ->where(['Competition_idCompetition' => $competition->id]);

        // Passage à la vue des paramètres
        $this->set([
            'journee' => $journee,
            'competition' => $competition,
            'matchs' => $matchsJournee,
            'journeesCompetition' => $journeesCompetition,
        ]);
    }
}