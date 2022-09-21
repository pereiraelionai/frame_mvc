<?php

namespace App\Controllers;
use MF\Controller\Action;

class IndexController extends Action  {


    public function index() {
        $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        $this->render('index.phtml', 'layout1');
    }

    public function sobreNos() {
        $this->view->dados = ['Nootebook', 'Smartphone'];
        $this->render('sobre_nos.phtml', 'layout2');
    }

}

?>