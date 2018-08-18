<?php

use \PlugRoute\PlugRoute;

$route = new PlugRoute();

$route->get('/', 'SysPlenus\Controllers\LoginController@index');
$route->post('/login', 'SysPlenus\Controllers\LoginController@login');
$route->get('/logout', 'SysPlenus\Controllers\LoginController@logout');


$route->group('/configuracao/', function($route) {
    $route->group('/modalidade/', function($route) {
        $route->get('/', 'SysPlenus\Controllers\Configuracao\ModalidadeController@index');
        $route->get('novo', 'SysPlenus\Controllers\Configuracao\ModalidadeController@novo');
        $route->get('editar', 'SysPlenus\Controllers\Configuracao\ModalidadeController@editar');
        $route->get('excluir', 'SysPlenus\Controllers\Configuracao\ModalidadeController@excluir');
        $route->post('salvar', 'SysPlenus\Controllers\Configuracao\ModalidadeController@salvar');
    });

});

$route->on();
