<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;


class ProfesorController extends Controller
{
    public function panelProfesor()
    {
        $this->render('index/indexprofesor');

    }
}