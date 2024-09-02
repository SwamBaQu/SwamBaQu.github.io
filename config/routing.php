<?php
// Default route when no specific path is provided or just the base URL
use Empresa\App\Core\Router;

$router = new Router();
//pagina principal
$router->add('', ['controller' => 'Index', 'action' => 'index']);
$router->add('home', ['controller' => 'Index', 'action' => 'index']);
//ruta index de administador
$router->add('admin/panelAdmin', ['controller' => 'Admin', 'action' => 'panelAdmin']);
$router->add('profesor/panelProfesor', ['controller' => 'Profesor', 'action' => 'panelProfesor']);
$router->add('usuariocomun/panelUsuarioComun', ['controller' => 'UsuarioComun', 'action' => 'panelUsuarioComun']);
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
$router->add('usuario/listar', ['controller' => 'Usuario', 'action' => 'listar']);
$router->add('usuario/modificar', ['controller' => 'Usuario', 'action' => 'modificar']);
$router->add('usuario/borrar', ['controller' => 'Usuario', 'action' => 'borrar']);
$router->add('usuario/editar', ['controller' => 'Usuario', 'action' => 'editar']);
//sucursales
$router->add('sucursales/listar', ['controller' => 'Sucursal', 'action' => 'listar']);
//evento
$router->add('evento/nuevo', ['controller' => 'Evento', 'action' => 'nuevo']);
$router->add('evento/crear', ['controller' => 'Evento', 'action' => 'crear']);
$router->add('evento/listar', ['controller' => 'Evento', 'action' => 'listar']);
$router->add('evento/editar', ['controller' => 'Evento', 'action' => 'editar']);
$router->add('evento/modificar', ['controller' => 'Evento', 'action' => 'modificar']);
$router->add('evento/borrar', ['controller' => 'Evento', 'action' => 'borrar']);
//sala
$router->add('sala/nuevo', ['controller' => 'Sala', 'action' => 'nuevo']);
$router->add('sala/crear', ['controller' => 'Sala', 'action' => 'crear']);
$router->add('sala/listar', ['controller' => 'Sala', 'action' => 'listar']);
$router->add('sala/modificar', ['controller' => 'Sala', 'action' => 'modificar']);
$router->add('sala/editar', ['controller' => 'Sala', 'action' => 'editar']);
$router->add('sala/borrar', ['controller' => 'Sala', 'action' => 'borrar']);
//socio
$router->add('socio/nuevo', ['controller' => 'Socio', 'action' => 'nuevo']);
$router->add('socio/crear', ['controller' => 'Socio', 'action' => 'crear']);
$router->add('socio/listar', ['controller' => 'Socio', 'action' => 'listar']);
$router->add('socio/modificar', ['controller' => 'Socio', 'action' => 'modificar']);
$router->add('socio/borrar', ['controller' => 'Socio', 'action' => 'borrar']);
$router->add('socio/editar', ['controller' => 'Socio', 'action' => 'editar']);
//docente
$router->add('docente/nuevo', ['controller' => 'Docente', 'action' => 'nuevo']);
$router->add('docente/crear', ['controller' => 'Docente', 'action' => 'crear']);
$router->add('docente/listar', ['controller' => 'Docente', 'action' => 'listar']);
$router->add('docente/modificar', ['controller' => 'Docente', 'action' => 'modificar']);
$router->add('docente/borrar', ['controller' => 'Docente', 'action' => 'borrar']);
$router->add('docente/editar', ['controller' => 'Docente', 'action' => 'editar']);