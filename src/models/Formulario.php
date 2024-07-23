<?php

declare(strict_types=1);

namespace Empresa\App\Models;

use Empresa\App\Core\Conexion;
use PDO;
use PDOException;
use Throwable;

class Formulario
{

    public function __construct(
        private $usuario,
        private $email,
        private $password,
         ) {
    }
    public function crear(): bool
    {
        $pdo = null;
        $stmt = null;
        try {
            
        $pdo = Conexion::getPDOConnection();

        $sql = "INSERT INTO formulario (usuario, email, password) 
        VALUES (:usuario, :email, :password)";
        $stmt = $pdo->prepare($sql);

        // Vincular parámetros
        $stmt->bindParam(':usuario', $this->usuario, PDO::PARAM_STR);
        $stmt->bindParam(':correo', $this->email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $this->password, PDO::PARAM_STR);
        return $stmt->execute();
          } catch (Throwable $th) {
            //throw $th;
        } finally {
            $pdo = null;
            $stmt = null;
            Conexion::cerrar();
        }
    
    }
}