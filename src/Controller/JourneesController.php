<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

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
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
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
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
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
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
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
        $competitions = $this->Journees->Competitions->find('list', ['limit' => 200]);
        $this->set(compact('journee', 'competitions'));
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
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
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
        $competitions = $this->Journees->Competitions->find('list', ['limit' => 200]);
        $this->set(compact('journee', 'competitions'));
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
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == 0) {
            return $this->redirect(array('controller' => 'Users', 'action' => 'viewlogin'));
        }
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

        if (!$journeeCompetition == null) {
            // redirection vers l'action resultats du controller
            $this->redirect(['action' => 'resultats', $journeeCompetition]);
        } else {
            $this->redirect(['action' => 'notFound']);
        }

        
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
                        'logoDomicile' => 'Domicile.nomImgLogo',
                        'logoVisiteur' => 'Visiteur.nomImgLogo'
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

        $connection = ConnectionManager::get('default');
        $journeeNext = $connection->execute('SELECT id FROM journees
        WHERE `numOrdreJournee` > '.$journee->numOrdreJournee.' ORDER BY `numOrdreJournee` ASC LIMIT 1')->fetch('assoc');

        $journeePrev = $connection->execute('SELECT id FROM journees
        WHERE `numOrdreJournee` < '.$journee->numOrdreJournee.' ORDER BY `numOrdreJournee` DESC LIMIT 1')->fetch('assoc');

        // Passage à la vue des paramètres
        $this->set([
            'journee' => $journee,
            'competition' => $competition,
            'matchs' => $matchsJournee,
            'journeesCompetition' => $journeesCompetition,
            'idJourneePrev' => $journeePrev,
            'idJourneeNext' => $journeeNext
        ]);
    }

    public function notFound()
    {
        
    }
}