<?php 

namespace Admin\FpolyBaseWeb18401\Controllers\Client;

use Admin\FpolyBaseWeb18401\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Admin';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}