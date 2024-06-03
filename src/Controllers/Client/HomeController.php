<?php

namespace Asus\FpolyBaseWeb3014\Controllers\Client;

use Asus\FpolyBaseWeb3014\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Hoanntph45196';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
