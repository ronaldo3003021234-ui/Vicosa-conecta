<?php
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'ServicoController::listar');
$routes->get('servicos', 'ServicoController::listar');
$routes->get('servicos/editar/(:num)', 'ServicoController::editar/$1');
$routes->post('servicos/atualizar/(:num)', 'ServicoController::atualizar/$1');