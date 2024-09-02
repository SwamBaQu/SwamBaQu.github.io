<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;


class UsuarioComunController extends Controller
{
    public function panelUsuarioComun()
    {
        $this->render('index/indexusuario');

    }
}