<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function home()
    {
        return view('PanelPrincipal/homeView');
    }
}

?>
