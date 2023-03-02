<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    private function crear_vista($nombre_vista = '', $datos = array()){
        $pagina = 'dashboard';
        $datos['menu'] = crear_menu_panel($pagina);
        // $datos['menu'] = '';
        return view($nombre_vista, $datos);
    }

    private function cargar_datos(){
        $datos = array();

        $datos['nombre_pagina'] = 'Dashboard';
        $datos['tarea'] = 'Dashboard';

        $breadcrumb = array(
            array(
                'tarea' => 'Dashborad',
                'href' => route_to('dashboard')
            ),
             array(
                 'tarea' => 'Inicio',
                 'href' => '#'
             )
            );


        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        return $datos;
    }

    public function index(){
        return $this->crear_vista('panel/dashboard', $this->cargar_datos());
    }
}