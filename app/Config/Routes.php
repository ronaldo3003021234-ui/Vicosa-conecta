<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rotas do Viçosa Conecta (Serviços)
$routes->get('servicos', 'ServicoController::index');
$routes->get('servicos/novo', 'ServicoController::novo');
$routes->post('servicos/salvar', 'ServicoController::salvar');
$routes->get('servicos/editar/(:num)', 'ServicoController::editar/$1');
$routes->get('servicos/excluir/(:num)', 'ServicoController::excluir/$1');