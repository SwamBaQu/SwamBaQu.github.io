<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;
use Empresa\App\Models\Formulario;

class FormularioController extends Controller
{
    public function index()
    {
        echo 'Bienvenido a la pagina principal!';
    }
    public function nuevo()
    {
        //var_dump($_GET)
        $this->render('formulario/nuevo');
    }
    public function crear()
    {
        $mensaje = "";
        try {
            //code...

            $usuario = $_POST['usuario'] ?? "defecto";
            $email = $_POST['email'] ?? "defecto";
            $password = $_POST['password'] ?? "defecto";
            $formulario = new Formulario($usuario, $email, $password);
            $resultado = $formulario->crear();
            $mensaje = "error al crear persona";
            if ($resultado) {
                $mensaje = "formulario creada con exito";
            }


            $this->render('formulario/mensaje', ["mensaje" => $mensaje]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
