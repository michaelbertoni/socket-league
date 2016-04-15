<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Competitions Controller
 *
 * @property \App\Model\Table\CompetitionsTable $Competitions
 */
class CompetitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $competitions = $this->paginate($this->Competitions);

        $this->set(compact('competitions'));
        $this->set('_serialize', ['competitions']);
    }

    /**
     * View method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competition = $this->Competitions->get($id, [
            'contain' => ['Equipes','Journees']
        ]);

        $this->set('competition', $competition);
        $this->set('_serialize', ['competition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competition = $this->Competitions->newEntity();
        if ($this->request->is('post')) {
            $competition = $this->Competitions->patchEntity($competition, $this->request->data);
            if ($this->Competitions->save($competition)) {
                $this->Flash->success(__('The competition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competition could not be saved. Please, try again.'));
            }
        }
        $equipes = $this->Competitions->Equipes->find('list', ['limit' => 200]);
        $this->set(compact('competition', 'equipes'));
        $this->set('_serialize', ['competition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competition = $this->Competitions->get($id, [
            'contain' => ['Equipes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competition = $this->Competitions->patchEntity($competition, $this->request->data);
            if ($this->Competitions->save($competition)) {
                $this->Flash->success(__('The competition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competition could not be saved. Please, try again.'));
            }
        }
        $equipes = $this->Competitions->Equipes->find('list', ['limit' => 200]);
        $this->set(compact('competition', 'equipes'));
        $this->set('_serialize', ['competition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Competition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competition = $this->Competitions->get($id);
        if ($this->Competitions->delete($competition)) {
            $this->Flash->success(__('The competition has been deleted.'));
        } else {
            $this->Flash->error(__('The competition could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function resultats($id = null)
    {
/*        // La clé 'pass' est fournie par CakePHP et contient tous les segments
        // d'URL de la "request" (instance de \Cake\Network\Request)
        $competitions = $this->request->params['pass'];*/

        $competition = $this->Competitions->get($id);

        $journeeCompetition = $this->Competitions->Journees->find()
            ->where(['Competition_idCompetition' => $id])
            ->order(['id' => 'DESC'])
            ->first();

        $matchsJournee = $this->Competitions->Journees->Matchs->find()
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
                ->where(['Journée_idJournée' => $journeeCompetition->id]);

        $this->set([
            'journee' => $journeeCompetition,
            'competition' => $competition,
            'matchs' => $matchsJournee
        ]);
    }
}
