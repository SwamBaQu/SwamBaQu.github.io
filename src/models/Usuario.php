<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Usuario
{

    public function __construct(
        private $usuario,
        private $email,
        private $password,
        private ?int $id = null
    ) {}
    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {

            $pdo = Conexion::getPDOConnection();

            $sql = "INSERT INTO Usuario (usuario, email, password) 
                    VALUES (:usuario, :email, :password)";
            $stmt = $pdo->prepare($sql);

            // Vincular parámetros
            $stmt->bindParam(':usuario', $this->usuario, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (Throwable $th) {
            error_log("Error al crear usuario: " . $th->getMessage());
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
            $sql = "UPDATE Usuario SET
                        usuario = :usuario,
                        password = :password,
                        email = :email
                    WHERE id = :id";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam(':usuario', $this->usuario, PDO::PARAM_STR);
            $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al modificar usuario:" . $e->getMessage());
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
            $sql = "DELETE FROM Usuario WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al eliminar usuario: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function arrayToUsuario($row): Usuario
    {
        $usuario = new Usuario(
            usuario: $row['usuario'],
            email: $row['email'],
            password: $row['password'],
            id: $row['id'] ?? null
        );
        return $usuario;
    }

    public static function listar(): array
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, usuario, email, password FROM Usuario";
            $stmt = $pdo->query($sql);
            $usuarios = [];
            while ($row = $stmt->fetch()) {
                $usuario = self::arrayToUsuario($row);
                $usuarios[] = $usuario;
            }
            return $usuarios;
        } catch (PDOException $e) {
            error_log("Error al listar usuarios: " . $e->getMessage());
            return [];
        } finally {
            $stmt = null;
            $pdo = null;
        }
    }

    public static function obtenerPorId(int $id): ?Usuario
    {
        $pdo = null;
        $stmt = null;
        try {
            $pdo = Conexion::getPDOConnection();
            $sql = "SELECT id, usuario, email, password FROM Usuario WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch();
            if ($row) {
                $usuario = self::arrayToUsuario($row);
                return $usuario;
            }
        } catch (\PDOException $e) {
            error_log("Error al obtener usuario: " . $e->getMessage());
        } finally {
            $stmt = null;
            $pdo = null;
            Conexion::cerrar();
        }
        return null;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of idusuario
     */
    public function getIdusuario(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
