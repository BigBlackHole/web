<?php
class IndexController extends Controller {
     
    /**
     * Home page
     */
    public function indexAction() {
        $this->view->generate('web', 'index.php', 'index.php');
    }
}

