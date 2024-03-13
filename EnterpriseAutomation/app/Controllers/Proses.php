<?php

namespace App\Controllers;

class Proses extends BaseController
{

    public function index() {

        $data = [
            'title' => 'Proses',
            'nav_active' => 2
        ];

        return view("pages/proses.php", $data);
    }
    
    public function proses() {
        $data = [
            'title' => 'Proses',
            'nav_active' => 2
        ];

        return view("pages/proses.php", $data);
    }



}
