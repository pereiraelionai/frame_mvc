<?php

namespace App;
use MF\Init\Bootstrap;

class Route extends Bootstrap {

    protected function initRoutes() {
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'index'
        );
        $routes['sobre-nos'] = array(
            'route' => '/sobre-nos',
            'controller' => 'IndexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }

}

?>