<?php

namespace App\Controllers;
use MF\Controller\Action;
use App\Models\Produto;


class IndexController extends Action  {


    public function index() {
        $this->view->dados = array('Sofá', 'Cadeira', 'Cama'); // Utilizar Container para retornar modelo do banco de dados
        $this->render('index.phtml', 'layout1');
    }

    public function sobreNos() {
        $this->view->dados = ['Nootebook', 'Smartphone'];// Utilizar Container para retornar modelo do banco de dados
        $this->render('sobre_nos.phtml', 'layout2');
    }

}

?>