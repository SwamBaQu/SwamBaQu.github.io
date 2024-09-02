<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Sala
{

    public function __construct(
        private $nombre,
        private $sala,
        private $ubicacion,
        private ?int $id = null
    ) {}
    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {

            $pdo = Conexion::getPDOConnection();

            $sql = "INSERT INTO Sala (nombre, sala, ubicacion) 
                    VALUES (:nombre, :sala, :ubicacion)";
            $stmt = $pdo->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':sala', $this->sala, PDO::PARAM_STR);
            $stmt->bindParam(':ubicacion', $this->ubicacion, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (Throwable $th) {
            error_log("Error al crear sala: " . $th->getMessage());
            return false;
        } finally {
            $pdo = null;
            $stmt = null;
            Conexion::cerrar();
        }
    }

    public function modificar(): bool
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "UPDATE Sala SET 
                        sala = :sala
                    WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':sala', $this->sala, PDO::PARAM_STR);
            
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al modificar sala:" . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function borrar(int $id): bool
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "DELETE FROM Sala WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al eliminar sala: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function arrayToSala($row): Sala
    {
        $sala = new Sala(
            nombre: $row['nombre'],
            sala: $row['sala'],
            ubicacion: $row['ubicacion'],
            id: $row['id'] ?? null
        );
        return $sala;
    }

    public static function listar(): array
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, nombre, sala, ubicacion FROM Sala";
            $stmt = $pdo->query($sql);
            $salas = [];
            while ($row = $stmt->fetch()) {
                $sala = self::arrayToSala($row);
                $salas[] = $sala;
            }
            return $salas;
        } catch (PDOException $e) {
            error_log("Error al listar salas: " . $e->getMessage());
            return [];
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function obtenerPorId(int $id): ?Sala
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, nombre, sala, ubicacion FROM Sala WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch();
            if ($row) {
                $sala = self::arrayToSala($row);
                return $sala;
            }
        } catch (\PDOException $e) {
            error_log("Error al obtener sala: " . $e->getMessage());
        } finally {
            $stmt = null;
            $pdo = null;
            Conexion::cerrar();
        }
        return null;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of sala
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Get the value of ubicacion
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
