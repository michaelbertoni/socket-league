<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
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
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
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
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
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
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
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
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
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
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function viewlogin(){
        if(session_id() == "") {
            session_start();}
        $user = $this->Users->newEntity();

        $user = $this->Users->patchEntity($user, $this->request->data);
        if($user->username != null && $user->password != null) {
            $loginUser = $user->username;
            $passwordUser = $user->password;

            $users = $this->Users->find('all');
            foreach ($users as $userlist) {

                $templogin = $userlist->loginUser;
                $temppass = $userlist->passwordUser;
                if($templogin == $loginUser && $temppass == $passwordUser) {
                    $_SESSION['connected'] = true;
                    $_SESSION['login'] = $loginUser;
                    return $this->redirect('/');
                }
            }

        }
    }

    public function deconnect() {
        session_start();
        $_SESSION['connected'] = false;

        return $this->redirect('/');
    }

}
