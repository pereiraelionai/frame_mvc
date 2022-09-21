<?php

namespace App\Controllers;
use MF\Controller\Action;
use App\Models\Produto;
use App\Models\Info;
use MF\Model\Container;

class IndexController extends Action  {


    public function index() {
        TODO: //Retirar do frame modelo
        //$this->view->dados = array('Sofá', 'Cadeira', 'Cama');
        //TODO: Implementar container no frame modelo
        $produto = Container::getModel('Produto');
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index.phtml', 'layout1');
    }

    public function sobreNos() {
        //$this->view->dados = ['Nootebook', 'Smartphone'];
        $info = Container::getModel('Info');
        $informacoes = $info->getInfo();   
        
        $this->view->dados = $informacoes;
        $this->render('sobre_nos.phtml', 'layout2');
    }

}

?>