<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Conexion;
use Empresa\App\Core\Controller;
use Empresa\App\Models\Socio;
use PDO;


class SocioController extends Controller
{
    public function index()
    {
        echo 'Bienvenido a la pagina principal!';
    }
    public function nuevo()
    {
        //var_dump($_GET)
        $this->render('socio/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
            $ci = ((int)$_POST['ci']) ?? 0;
            $nombre = $_POST['nombre'] ?? "defecto";
            $apellido = $_POST['apellido'] ?? "defecto";
            $email = $_POST['email'] ?? "defecto";
            $infomedica = $_POST['infomedica'] ?? "defecto";
            

            $socio = new Socio(
                id: $id,
                ci: $ci,
                nombre: $nombre,
                apellido: $apellido,
                email: $email,
                infomedica: $infomedica
            );

            if ($socio->crear()) {
                $mensaje = "El socio ha sido ingresado con éxito.";
            } else {
                $mensaje = "Error al ingresar al socio.";
            }
            $this->render('socio/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en crear: " . $th->getMessage());
            $this->render('socio/mensaje', ["mensaje" => "Ocurrió un error al ingresar al socio."]);
            //throw $th;
        }
    }

    public function modificar()
    {
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $id = ((int)$_POST['id']) ?? 0;
            $ci = ((int)$_POST['ci']) ?? 0;
            $nombre = $_POST['nombre'] ?? "defecto";
            $apellido = $_POST['apellido'] ?? "defecto";
            $email = $_POST['email'] ?? "defecto";
            $infomedica = $_POST['infomedica'] ?? "defecto";

            // Crear instancia de usuario
            $socio = new Socio(
                id: $id ,
                ci: $ci ,
                nombre: $nombre , 
                apellido: $apellido , 
                email: $email ,
                infomedica: $infomedica
            );

            // Modificar en la base de datos
            if ($socio->modificar()) {
                $mensaje = "El socio ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar al socio.";
            }
            $this->render('socio/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en modificar: " . $th->getMessage());
            $this->render('socio/mensaje', ["mensaje" => "Ocurrió un error al modificar al socio."]);
        }
    }


    public function borrar()
    {
        $mensaje = "Estas seguro de eliminar este socio?";
        try {
            // Obtener el ID del usuario a borrar
            // $usuario = isset($_POST['usuario']); // Asegurando el tipo
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0; // Asegurando el tipo

            // Borrar usuario de la base de datos
            if (socio::borrar($id)) {
                $mensaje = "El socio ha sido eliminado con éxito.";
            } else {
                $mensaje = "Error al eliminar al socio.";
            }
            $this->render('socio/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en borrar: " . $th->getMessage());
            $this->render('socio/mensaje', ["mensaje" => "Ocurrió un error al borrar al socio."]);
        }
    }

    public function listar()
    {
        try {
            $socios = Socio::listar();
            $this->render('socio/listar', ["socios" => $socios]);
        } catch (\Throwable $th) {
            error_log("Error en listar: " . $th->getMessage());
            $this->render('socio/mensaje', ["mensaje" => "Ocurrió un error al listar los socios."]);
        }
    }

    public function editar()
    {
        try {
            // Obtener el ID del usuario a editar
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;; // Asegurando el tipo
            $socio = Socio::obtenerPorId($id); // Corregido el nombre del método para seguir el estándar de CamelCase

            // Mostrar formulario de edición
            $this->render('socio/editar', ["socio" => $socio]);
        } catch (\Throwable $th) {
            error_log("Error en editar: " . $th->getMessage());
            $this->render('socio/mensaje', ["mensaje" => "Ocurrió un error al editar socio."]);
        }
    }
}
