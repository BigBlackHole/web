<?php
class IndexController extends Controller {
     
    /**
     * Error 404
     */
    public function error404Action() {
        $this->view->generate('error', '404.php', 'index.php');
    }

}

