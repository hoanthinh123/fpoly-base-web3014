<?php


namespace Asus\FpolyBaseWeb3014\Controllers\Admin;

use Asus\FpolyBaseWeb3014\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}