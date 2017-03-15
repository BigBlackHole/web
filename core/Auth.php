<?php
require_once 'models/User.php';
require_once 'models/UserRepository.php';
class Auth {
    /**
     * Identity for authentication
     */
    public $identity;

    public function __construct($identity) {
        $this->identity = $identity;
    }

    public function authenticate() {
        $user = new User();
        $data = $this->getIdentity();
        if(!empty($data)){
            $user->setPassword($data['password']);
            $user->setSessionPassword($_POST['password']);
            if($user->isValid()) {
                Session::set('UserID', $data['id']);
                $data = ['status' => 'ok'];
            } else {
                $data = ['error' => 'Wrong email or password'];
            }
        } else {
            $data = ['error' => 'Wrong email or password'];
        }
        return $data;
    }

    private function getIdentity() {
        $em = new UserRepository();
        $data = $em->findByOne($this->identity);
        return $data;
    }
}
