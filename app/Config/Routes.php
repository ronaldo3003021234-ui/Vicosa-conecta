<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// A raiz e a URL /home abrem a página de apresentação (Landing Page)
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');

// Rotas do Viçosa Conecta (Gerenciamento de Serviços e Tabela)
$routes->get('servicos', 'ServicoController::index');
$routes->get('servicos/novo', 'ServicoController::novo');
$routes->post('servicos/salvar', 'ServicoController::salvar');
$routes->get('servicos/editar/(:num)', 'ServicoController::editar/$1');
$routes->get('servicos/excluir/(:num)', 'ServicoController::excluir/$1');