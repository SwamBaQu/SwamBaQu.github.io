<?php
// Default route when no specific path is provided or just the base URL
use Empresa\App\Core\Router;

$router = new Router();
//pagina principal
$router->add('', ['controller' => 'Index', 'action' => 'index']);
$router->add('home', ['controller' => 'Index', 'action' => 'index']);
//$router->add('articulo/listar', ['controller' => 'Articulo', 'action' => 'listar']);
//http: //localhost/mvccomposer/index.php/auto/nuevo
//autos
$router->add('autos/listar', ['controller' => 'Auto', 'action' => 'listar']);
$router->add('autos/editar', ['controller' => 'Auto', 'action' => 'editar']);
$router->add('autos/modificar', ['controller' => 'Auto', 'action' => 'modificar']);
$router->add('autos/borrar', ['controller' => 'Auto', 'action' => 'borrar']);
//usuario
$router->add('usuario/nuevo', ['controller' => 'Usuario', 'action' => 'nuevo']);
$router->add('usuario/crear', ['controller' => 'Usuario', 'action' => 'crear']);
$router->add('usuario/modificar', ['controller' => 'Usuario', 'action' => 'modificar']);
$router->add('usuario/borrar', ['controller' => 'Usuario', 'action' => 'borrar']);
//sucursales
$router->add('sucursales/listar', ['controller' => 'Sucursal', 'action' => 'listar']);
