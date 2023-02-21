<?php

namespace App\Controllers;

class Login extends BaseController
{
    private function crear_vista($nombre_vista = ''){
        return view($nombre_vista);
    }

    public function login()
    {
        mensaje("Ejemplo", ALERT_INFO);
        return view('user/loginAD.php');
    }

    public function validar(){
        dd('Vou a validar tu información.');
        return redirect()->to(route_to('dashboard'));
    }
}