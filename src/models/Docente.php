<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Docente
{

    public function __construct(
        private $nombre,
        private $apellido,
        private $horario,
        private $email,
        private $oficio,
        private ?int $ci = null
    ) {}
    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {

            $pdo = Conexion::getPDOConnection();

            $sql = "INSERT INTO Docente (ci, nombre, apellido, horario, email, oficio) 
                    VALUES (:ci, :nombre, :apellido, :horario, :email, :oficio)";
            $stmt = $pdo->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':ci', $this->ci, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
            $stmt->bindParam(':horario', $this->horario, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':oficio', $this->oficio, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (Throwable $th) {
            error_log("Error al ingresar docente: " . $th->getMessage());
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
            $sql = "UPDATE Docente SET 
                        nombre = :nombre,
                        apellido = :apellido,
                        horario = :horario,
                        email = :email,
                        oficio = :oficio
                    WHERE ci = :ci";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':ci', $this->ci, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $this->apellido, PDO::PARAM_STR);
            $stmt->bindParam(':horario', $this->horario, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':oficio', $this->oficio, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al modificar docente:" . $e->getMessage());
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
            $sql = "DELETE FROM Docente WHERE ci=:ci";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':ci', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al eliminar docente: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function arrayToDocente($row): Docente
    {
        $docente = new Docente(
            nombre: $row['nombre'],
            apellido: $row['apellido'],
            horario: $row['horario'],
            email: $row['email'],
            oficio: $row['oficio'],
            ci: $row['ci'] ?? null
        );
        return $docente;
    }

    public static function listar(): array
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT ci, nombre, apellido, horario, email, oficio FROM Docente";
            $stmt = $pdo->query($sql);
            $docentes = [];
            while ($row = $stmt->fetch()) {
                $docente = self::arrayToDocente($row);
                $docentes[] = $docente;
            }
            return $docentes;
        } catch (PDOException $e) {
            error_log("Error al listar docentes: " . $e->getMessage());
            return [];
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function obtenerPorCedula(int $ci): ?Docente
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT ci, nombre, apellido, horario, email, oficio FROM Docente WHERE ci = :ci";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':ci', $ci, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch();
            if ($row) {
                $docente = self::arrayToDocente($row);
                return $docente;
            }
        } catch (\PDOException $e) {
            error_log("Error al obtener docente: " . $e->getMessage());
        } finally {
            $stmt = null;
            $pdo = null;
            Conexion::cerrar();
        }
        return null;
    }

    public function getCi(): ?int
    {
        return $this->ci;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function getOficio()
    {
        return $this->oficio;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
