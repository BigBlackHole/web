<?php
require_once 'models/User.php';
require_once 'models/UserRepository.php';
class IndexController extends Controller {
    
    public function indexAction() {}
    /**
     * Login page
     */
    public function loginAction() {
        $this->view->generate('user', 'login.php', 'index.php');
    }
    public function loginCheckAction() {
        $auth = new Auth($_POST['email']);
        $data = $auth->authenticate();
        echo json_encode($data);
    }
    /**
     * Registration page
     */
    public function registrationAction() {
        $this->view->generate('user', 'registration.php', 'index.php');
    }
    public function registrationSaveAction() {
        $user = new User();
        $repository = new UserRepository();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $data = ['error' => 'Некорректные данные'];
        $entity = $repository->findByOne($user->getEmail());
        if(!$entity && strlen($user->getPassword()) > 7) {
            $repository->save($user->toArray());
            $data = ['status' => 'ok'];
        }
        echo json_encode($data);
    }
    /**
     * Logout user
     */
    public function logoutAction() {
        Session::destroy();
        header('Location: ../');
        exit();
    }
}

