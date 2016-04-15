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

    public function lastJournee($id = null)
    {
        $this->redirect(
            ['controller' => 'Journees', 'action' => 'resultatsFromCompetition', $id]
        );
    }

    public function classement($id = null)
    {
        $competition = $this->Competitions->get($id, [
            'contain' => ['Equipes.Matchs']
        ]);

        foreach ($competition->equipes as $equipe) {
            $equipe->butsPour = 0;
            $equipe->butsContre = 0;
            $equipe->matchsJoues = 0;
            $equipe->matchsGagnes = 0;
            $equipe->matchsPerdus = 0;
            $equipe->matchsNuls = 0;
            foreach ($equipe->matchs as $match) {

                // Si l'équipe joue à domicile
                if ($match->EquipeDomicile_idEquipe == $equipe->id) {

                    $equipe->matchsJoues++;

                    // victoire
                    if ($match->scoreEquipeDomicile > $match->scoreEquipeVisiteur) {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeDomicile;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeVisiteur;
                        $equipe->matchsGagnes++;
                    // défaite
                    } elseif ($match->scoreEquipeDomicile < $match->scoreEquipeVisiteur)  {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeDomicile;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeVisiteur;
                        $equipe->matchsPerdus++;
                    // match nul
                    } else {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeDomicile;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeVisiteur;
                        $equipe->matchsNuls++;
                    }

                // Si l'équipe joue à l'extérieur
                } elseif ($match->EquipeVisiteur_idEquipe == $equipe->id) {

                    $equipe->matchsJoues++;

                    // défaite
                    if ($match->scoreEquipeDomicile > $match->scoreEquipeVisiteur) {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeVisiteur;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeDomicile;
                        $equipe->matchsPerdus++;
                    // victoire
                    } elseif ($match->scoreEquipeDomicile < $match->scoreEquipeVisiteur)  {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeVisiteur;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeDomicile;
                        $equipe->matchsGagnes++;
                    // match nul
                    } else {
                        $equipe->butsPour = $equipe->butsPour + $match->scoreEquipeVisiteur;
                        $equipe->butsContre = $equipe->butsContre + $match->scoreEquipeDomicile;
                        $equipe->matchsNuls++;
                    }
                }
            }
            $equipe->differenceBut = $equipe->butsPour - $equipe->butsContre;
            $equipe->pointsCompetition = $equipe->matchsGagnes*3 + $equipe->matchsNuls;
        }


        $this->set([
            'competition' => $competition,
        ]);
    }
}
