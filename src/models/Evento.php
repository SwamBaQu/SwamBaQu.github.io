<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Evento
{
    public function __construct(
        private $titulo,
        private $hora_fecha,
        private $capacidad,
        private $ubicacion,
        private $descripcion,
        private ?int $id = null,
    ) {}

    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {

            $pdo = Conexion::getPDOConnection();

            $sql = "INSERT INTO Evento (titulo, hora_fecha, capacidad, ubicacion, descripcion) 
                    VALUES (:titulo, :horafecha, :capacidad, :ubicacion, :descripcion)";
            $stmt = $pdo->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':titulo', $this->titulo, PDO::PARAM_STR);
            $stmt->bindParam(':horafecha', $this->hora_fecha, PDO::PARAM_STR); // Consistencia en nombre
            $stmt->bindParam(':capacidad', $this->capacidad, PDO::PARAM_INT);
            $stmt->bindParam(':ubicacion', $this->ubicacion, PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $this->descripcion, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (Throwable $th) {
            error_log("Error al crear evento: " . $th->getMessage());
            return false;
        } finally {
            $pdo = null;
            $stmt = null;
            Conexion::cerrar();
        }
    }

    public static function arrayToEvento($row): Evento
    {
        $evento = new Evento(
            titulo: $row['titulo'],
            hora_fecha: $row['hora_fecha'],
            capacidad: $row['capacidad'],
            ubicacion: $row['ubicacion'],
            descripcion: $row['descripcion'],
            id: $row['id'] ?? null // Manejar null si 'id' no está presente
        );
        return $evento;
    }

    public static function listar(): array
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, titulo, hora_fecha, capacidad, ubicacion, descripcion FROM Evento";
            $stmt = $pdo->query($sql);
            $eventos = [];
            while ($row = $stmt->fetch()) {
                $evento = self::arrayToEvento($row);
                $eventos[] = $evento;
            }
            return $eventos;
        } catch (PDOException $e) {
            error_log("Error al listar eventos: " . $e->getMessage());
            return [];
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function obtenerPorId(int $id): ?Evento
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, titulo, hora_fecha, capacidad, ubicacion, descripcion FROM Evento WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch();
            if ($row) {
                $evento = self::arrayToEvento($row);
                return $evento;
            }
        } catch (PDOException $e) {
            error_log("Error al obtener evento: " . $e->getMessage());
        } finally {
            $stmt = null;
            $pdo = null;
            Conexion::cerrar();
        }
        return null;
    }

    public function modificar(): bool
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "UPDATE Evento SET 
                        hora_fecha = :horafecha,
                        descripcion = :descripcion 
                    WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':horafecha', $this->hora_fecha, PDO::PARAM_STR); // Consistencia en nombre
            $stmt->bindParam(':descripcion', $this->descripcion, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al actualizar evento: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function borrar($id): bool
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "DELETE FROM Evento WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al eliminar evento: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    // Métodos getters
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getHoraFecha()
    {
        return $this->hora_fecha;
    }

    public function getCapacidad()
    {
        return $this->capacidad;
    }

    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
