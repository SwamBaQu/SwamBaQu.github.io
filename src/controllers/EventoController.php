<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use DateTime;
use Empresa\App\Core\Controller;
use Empresa\App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }

    public function nuevo()
    {
        $this->render('evento/nuevo');
    }

    public function crear()
    {
        $titulomsj = "Creación de Evento";
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $titulo = $_POST['titulo'] ?? '';
            $hora_fecha = $_POST['hora_fecha'] ?? '';
            $capacidad = isset($_POST['capacidad']) ? (int)$_POST['capacidad'] : 0; // Asegurando el tipo
            $ubicacion = $_POST['ubicacion'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';

            // Crear instancia de evento
            $evento = new Evento(
                titulo: $titulo,
                hora_fecha: $hora_fecha,
                capacidad: $capacidad,
                ubicacion: $ubicacion,
                descripcion: $descripcion
            );

            // Insertar en la base de datos
            if ($evento->crear()) {
                $mensaje = "El evento ha sido creado con éxito.";
            } else {
                $mensaje = "Error al crear el evento.";
            }
            $this->render('evento/mensaje', ["titulomsj" => $titulomsj, "mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en crear: " . $th->getMessage());
            $this->render('evento/mensaje', ["mensaje" => "Ocurrió un error al crear el evento."]);
        }
    }

    public function modificar()
    {
        $titulomsj = "Modificación de Evento";
        $mensaje = "";
        try {
            // Obtener datos del formulario
            $id = ((int)$_POST['id']) ?? 0; // Asegurando el tipo
            $titulo = $_POST['titulo'] ?? '';
            $hora_fecha = $_POST['Horafecha'] ?? '';
            $dateTime = new DateTime($hora_fecha);
            $formatoDeseado = 'Y-m-d H:i:s';
            $horaFechaF = $dateTime->format($formatoDeseado);

            $capacidad = isset($_POST['capacidad']) ? (int)$_POST['capacidad'] : 0; // Asegurando el tipo
            $ubicacion = $_POST['ubicacion'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';

            // Crear instancia de evento
            $evento = new Evento(
                id: $id,
                titulo: $titulo,
                hora_fecha: $horaFechaF,
                capacidad: $capacidad,
                ubicacion: $ubicacion,
                descripcion: $descripcion
            );

            // Modificar en la base de datos
            if ($evento->modificar()) {
                $mensaje = "El evento ha sido modificado con éxito.";
            } else {
                $mensaje = "Error al modificar el evento.";
            }
            $this->render('evento/mensaje', ["titulomsj" => $titulomsj, "mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en modificar: " . $th->getMessage());
            $this->render('evento/mensaje', ["mensaje" => "Ocurrió un error al modificar el evento."]);
        }
    }

    public function borrar()
    {
        $titulomsj = "Eliminación de Evento";
        $mensaje = "Estas seguro de borrar este evento?";
        try {
            // Obtener el ID del evento a borrar
            // $id = isset($_POST['id']) ? (int)$_POST['id'] : 0; // Asegurando el tipo
            $id = (trim($_POST['id'])) ??  0; // Asegurando el tipo
            $idInt = (int) $id; // Asegurando el tipo

            // Borrar evento de la base de datos
            if (Evento::borrar($idInt)) {
                $mensaje = "El evento ha sido borrado con éxito.";
            } else {
                $mensaje = "Error al borrar el evento.";
            }
            $this->render('evento/mensaje', ["titulomsj" => $titulomsj, "mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            error_log("Error en borrar: " . $th->getMessage());
            $this->render('evento/mensaje', ["mensaje" => "Ocurrió un error al borrar el evento."]);
        }
    }

    public function listar()
    {
        try {
            $eventos = Evento::listar();
            $this->render('evento/listar', ["eventos" => $eventos]);
        } catch (\Throwable $th) {
            error_log("Error en listar: " . $th->getMessage());
            $this->render('evento/mensaje', ["mensaje" => "Ocurrió un error al listar los eventos."]);
        }
    }

    public function editar()
    {
        try {
            // Obtener el ID del evento a editar
            $id = isset($_GET['id']) ? (int)$_GET['id'] : 0; // Asegurando el tipo
            $evento = Evento::obtenerPorId($id); // Corregido el nombre del método para seguir el estándar de CamelCase

            // Mostrar formulario de edición
            $this->render('evento/editar', ["evento" => $evento]);
        } catch (\Throwable $th) {
            error_log("Error en editar: " . $th->getMessage());
            $this->render('evento/mensaje', ["mensaje" => "Ocurrió un error al editar el evento."]);
        }
    }
}
