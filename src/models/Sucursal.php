<?php

declare(strict_types=1);

namespace Empresa\App\Models;


use Empresa\App\Core\Conexion;
use PDO;
use PDOException;

// Incluir la clase Conexion

class Sucursal
{
    //Constructor de promoción de propiedades
    public function __construct(
        public string $nombre,
        public ?int $id = null,
    ) {
    }
    // Método para insertar una nueva sucursal en la base de datos

    public static function listar(): array
    {

        try {
            $sucursales[] = new Sucursal(
                id: 25,
                nombre: "Sucursal1"
            );
            $sucursales[] = new Sucursal(
                id: 26,
                nombre: "Sucursal2"
            );
            return $sucursales;
        } catch (PDOException $e) {
            error_log("Error al obtener sucursal: " . $e->getMessage());
            return [];
        }
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}
