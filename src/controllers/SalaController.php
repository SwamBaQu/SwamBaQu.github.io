<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Conexion;
use Empresa\App\Core\Controller;
use Empresa\App\Models\Sala;
use PDO;


class SalaController extends Controller
{
    public function index()
    {
        echo 'Bienvenido a la pagina principal!';
    }
    public function nuevo()
    {
        //var_dump($_GET)
        $this->render('sala/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...
            $nombre = $_POST['nombre'] ?? '';
            $sala = $_POST['sala'] ?? '';
            $ubicacion = $_POST['ubicacion'] ?? '';

            $sala = new Sala(
                nombre: $nombre,
                sala: $sala,
                ubicacion: $ubicacion
            );

            if ($sala->crear()) {
                $mensaje = "La sala ha sido creada con éxito.";
            } else {
                $mensaje = "Error al crear la sala.";
            }
            $this->render('sala/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en crear: " . $th->getMessage());
            $this->render('sala/mensaje', ["mensaje" => "Ocurrió un error al crear la sala."]);
            //throw $th;
        }
    }

    public function modificar()
    {
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $id = ((int)$_POST['id']) ?? 0;
            $nombre = $_POST['nombre'] ?? '';
            $sala = $_POST['sala'] ?? '';
            $ubicacion = $_POST['ubicacion'] ?? '';

            // Crear instancia de usuario
            $sala = new Sala(
                id: $id,
                nombre: $nombre,
                sala: $sala,
                ubicacion: $ubicacion
            );

            // Modificar en la base de datos
            if ($sala->modificar()) {
                $mensaje = "La sala ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar la sala.";
            }
            $this->render('sala/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en modificar: " . $th->getMessage());
            $this->render('sala/mensaje', ["mensaje" => "Ocurrió un error al modificar la sala."]);
        }
    }


    public function borrar()
    {
        $mensaje = "Estas seguro de eliminar esta sala?";
        try {
            // Obtener el ID del usuario a borrar
            // $usuario = isset($_POST['usuario']); // Asegurando el tipo
            $id = isset($_POST['id']) ? (int)$_POST['id'] : 0; // Asegurando el tipo

            // Borrar usuario de la base de datos
            if (sala::borrar($id)) {
                $mensaje = "La sala ha sido eliminado con éxito.";
            } else {
                $mensaje = "Error al eliminar la sala.";
            }
            $this->render('sala/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en borrar: " . $th->getMessage());
            $this->render('sala/mensaje', ["mensaje" => "Ocurrió un error al borrar la sala."]);
        }
    }

    public function listar()
    {
        try {
            $salas = Sala::listar();
            $this->render('sala/listar', ["salas" => $salas]);
        } catch (\Throwable $th) {
            error_log("Error en listar: " . $th->getMessage());
            $this->render('sala/mensaje', ["mensaje" => "Ocurrió un error al listar las salas."]);
        }
    }



    public function editar()
    {
        try {
            // Obtener el ID del usuario a editar
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;; // Asegurando el tipo
            $sala = Sala::obtenerPorId($id); // Corregido el nombre del método para seguir el estándar de CamelCase

            // Mostrar formulario de edición
            $this->render('sala/editar', ["sala" => $sala]);
        } catch (\Throwable $th) {
            error_log("Error en editar: " . $th->getMessage());
            $this->render('sala/mensaje', ["mensaje" => "Ocurrió un error al editar la sala."]);
        }
    }
}
