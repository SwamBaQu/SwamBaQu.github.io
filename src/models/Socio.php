<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Socio
{

    public function __construct(
        private $nombre,
        private $apellido,
        private $email,
        private $infomedica,
        private $ci,
        private ?int $id = null
    ) {}
    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {

            $pdo = Conexion::getPDOConnection();

            $sql = "INSERT INTO Socio (ci, nombre, apellido, email, infomedica)
                    VALUES (:ci, :nombre, :apellido, :email, :infomedica)";
            $stmt = $pdo->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':ci', $this->ci, PDO::PARAM_STR);
            $stmt->bindParam(':nombre', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':infomedica', $this->infomedica, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (Throwable $th) {
            error_log("Error al crear socio: " . $th->getMessage());
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
            $sql = "UPDATE Socio SET 
                        email = :email,
                        infomedica = :infomedica,
                        ci = :ci
                    WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':ci', $this->ci, PDO::PARAM_INT);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':infomedica', $this->infomedica, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al modificar socio:" . $e->getMessage());
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
            $sql = "DELETE FROM Socio WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al eliminar socio: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function arrayToSocio($row): Socio
    {
        $socio = new Socio(
            nombre: $row['nombre'],
            apellido: $row['apellido'],
            email: $row['email'],
            infomedica: $row['infomedica'],
            ci: $row['ci'],
            id: $row['id'] ?? null
        );
        return $socio;
    }

    public static function listar(): array
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, ci, nombre, apellido, email, infomedica FROM Socio";
            $stmt = $pdo->query($sql);
            $socios = [];
            while ($row = $stmt->fetch()) {
                $socio = self::arrayToSocio($row);
                $socios[] = $socio;
            }
            return $socios;
        } catch (PDOException $e) {
            error_log("Error al listar socios: " . $e->getMessage());
            return [];
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function obtenerPorId(int $id): ?Socio
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, ci, nombre, apellido, email, infomedica FROM Socio WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch();
            if ($row) {
                $socio = self::arrayToSocio($row);
                return $socio;
            }
        } catch (\PDOException $e) {
            error_log("Error al obtener id: " . $e->getMessage());
        } finally {
            $stmt = null;
            $pdo = null;
            Conexion::cerrar();
        }
        return null;
    }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function getApellido()
        {
                return $this->apellido;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function getInfomedica()
        {
                return $this->infomedica;
        }

        public function getCi()
        {
                return $this->ci;
        }
        
        public function getId(): ?int
        {
                return $this->id;
        }
}
