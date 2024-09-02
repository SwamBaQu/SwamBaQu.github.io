<?php

declare(strict_types=1);

namespace Empresa\App\Controllers;

use Empresa\App\Core\Controller;


class AdminController extends Controller
{
    public function panelAdmin()
    {
        $this->render('index/indexadmin');

    }
}