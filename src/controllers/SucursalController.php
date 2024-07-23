<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;

use Empresa\App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        echo 'Welcome to the Home Page!';
    }

    public function listar()
    {
        try {
            $sucursal = Sucursal::listar();
            $this->render('sucursal/listar', ["sucursales" => $sucursal]);
        } catch (\Throwable $th) {
            //throw $sucursal   
        }
    }
}
