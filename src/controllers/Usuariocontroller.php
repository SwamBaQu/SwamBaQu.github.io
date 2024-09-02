<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Conexion;
use Empresa\App\Core\Controller;
use Empresa\App\Models\Usuario;
use PDO;


class UsuarioController extends Controller
{
    public function index()
    {
        echo 'Bienvenido a la pagina principal!';
    }
    public function nuevo()
    {
        //var_dump($_GET)
        $this->render('usuario/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...

            $usuario = $_POST['usuario'] ?? "defecto";
            $email = $_POST['email'] ?? "defecto";
            $password = $_POST['password'] ?? "defecto";

            $usuario = new Usuario(
                    usuario: $usuario,
                    email: $email,
                    password: $password
                );


            if ($usuario->crear()) {
                $mensaje = "El usuario ha sido ingresado con éxito.";
            } else {
                $mensaje = "Error al ingresar al usuario.";
            }
            $this->render('usuario/mensaje', ["mensaje" => $mensaje]);

        } catch (\Throwable $th) {
            error_log("Error en crear: " . $th->getMessage());
            $this->render('usuario/mensaje', ["mensaje" => "Ocurrió un error al ingresar al usuario."]);
            //throw $th;
        }
    }

    public function modificar()
    {
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $id = ((int)$_POST['id']) ?? 0;
            $usuario = $_POST['usuario'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Crear instancia de usuario
            $usuario = new Usuario(
                id: $id,
                usuario: $usuario,
                email: $email,
                password: $password
            );

            // Modificar en la base de datos
            if ($usuario->modificar()) {
                $mensaje = "El usuario ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar el usuario.";
            }
            $this->render('usuario/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en modificar: " . $th->getMessage());
            $this->render('usuario/mensaje', ["mensaje" => "Ocurrió un error al modificar el usuario."]);
        }
    }


    public function borrar()
    {
        $mensaje = "Estas seguro de eliminar este usuario?";
        try {
            // Obtener el ID del usuario a borrar
            // $usuario = isset($_POST['usuario']); // Asegurando el tipo
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0; // Asegurando el tipo

            // Borrar usuario de la base de datos
            if (Usuario::borrar($id)) {
                $mensaje = "El usuario ha sido eliminado con éxito.";
            } else {
                $mensaje = "Error al eliminar el usuario.";
            }
            $this->render('usuario/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en borrar: " . $th->getMessage());
            $this->render('usuario/mensaje', ["mensaje" => "Ocurrió un error al borrar el usuario."]);
        }
    }

    public function listar()
    {
        try {
            $usuarios = Usuario::listar();
            $this->render('usuario/listar', ["usuarios" => $usuarios]);
        } catch (\Throwable $th) {
            error_log("Error en listar: " . $th->getMessage());
            $this->render('usuario/mensaje', ["mensaje" => "Ocurrió un error al listar los usuarios."]);
        }
    }



    public function editar()
    {
        try {
            // Obtener el ID del usuario a editar
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;; // Asegurando el tipo
            $usuario = Usuario::obtenerPorId($id); // Corregido el nombre del método para seguir el estándar de CamelCase

            // Mostrar formulario de edición
            $this->render('usuario/editar', ["usuario" => $usuario]);
        } catch (\Throwable $th) {
            error_log("Error en editar: " . $th->getMessage());
            $this->render('usuario/mensaje', ["mensaje" => "Ocurrió un error al editar el usuario."]);
        }
    }
}
