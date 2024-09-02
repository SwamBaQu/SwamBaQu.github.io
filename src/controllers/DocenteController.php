<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Conexion;
use Empresa\App\Core\Controller;
use Empresa\App\Models\Docente;
use PDO;


class DocenteController extends Controller
{
    public function index()
    {
        echo 'Bienvenido a la pagina principal!';
    }
    public function nuevo()
    {
        //var_dump($_GET)
        $this->render('docente/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...

            $nombre = $_POST['nombre'] ?? '';
            $apellido = $_POST['apellido'] ?? '';
            $horario = $_POST['horario'] ?? '';
            $email = $_POST['email'] ?? '';
            $oficio = $_POST['oficio'] ?? '';
         
            $docente = new Docente(
                nombre: $nombre,
                apellido: $apellido,
                horario: $horario,
                email: $email,
                oficio: $oficio
            );


            if ($docente->crear()) {
                $mensaje = "El docente ha sido ingresado con éxito.";
            } else {
                $mensaje = "Error al crear al ingresar al docente.";
            }
            $this->render('docente/mensaje', ["mensaje" => $mensaje]);

        } catch (\Throwable $th) {
            error_log("Error en crear: " . $th->getMessage());
            $this->render('docente/mensaje', ["mensaje" => "Ocurrió un error al ingresar docente."]);
            //throw $th;
        }
    }

    public function modificar()
    {
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $ci = ((int)$_POST['ci']) ?? 0;
            $nombre = $_POST['nombre'] ?? '';
            $apellido = $_POST['apellido'] ?? '';
            $horario = $_POST['horario'] ?? '';
            $email = $_POST['email'] ?? '';
            $oficio = $_POST['oficio'] ?? '';

            // Crear instancia de usuario
            $docente = new Docente(
                ci: $ci,
                nombre: $nombre,
                apellido: $apellido,
                horario: $horario,
                email: $email,
                oficio: $oficio
            );

            // Modificar en la base de datos
            if ($docente->modificar()) {
                $mensaje = "El docente ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar al docente.";
            }
            $this->render('docente/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en modificar: " . $th->getMessage());
            $this->render('docente/mensaje', ["mensaje" => "Ocurrió un error al modificar al docente."]);
        }
    }


    public function borrar()
    {
        $mensaje = "Estas seguro de eliminar este docente?";
        try {
            // Obtener el ID del usuario a borrar
            // $usuario = isset($_POST['usuario']); // Asegurando el tipo
            $ci = isset($_POST['ci']) ? (int)$_POST['ci'] : 0; // Asegurando el tipo

            // Borrar usuario de la base de datos
            if (docente::borrar($ci)) {
                $mensaje = "El docente ha sido eliminado con éxito.";
            } else {
                $mensaje = "Error al eliminar al docente.";
            }
            $this->render('docente/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en borrar: " . $th->getMessage());
            $this->render('docente/mensaje', ["mensaje" => "Ocurrió un error al borrar al docente."]);
        }
    }

    public function listar()
    {
        try {
            $docentes = Docente::listar();
            $this->render('docente/listar', ["docentes" => $docentes]);
        } catch (\Throwable $th) {
            error_log("Error en listar: " . $th->getMessage());
            $this->render('docente/mensaje', ["mensaje" => "Ocurrió un error al listar los docentes."]);
        }
    }



    public function editar()
    {
        try {
            // Obtener el ID del usuario a editar
            $ci = isset($_GET['ci']) ? (int)$_GET['ci'] : 0;; // Asegurando el tipo
            $docente = Docente::obtenerPorCedula($ci); // Corregido el nombre del método para seguir el estándar de CamelCase

            // Mostrar formulario de edición
            $this->render('docente/editar', ["docente" => $docente]);
        } catch (\Throwable $th) {
            error_log("Error en editar: " . $th->getMessage());
            $this->render('docente/mensaje', ["mensaje" => "Ocurrió un error al editar al docente."]);
        }
    }
}
