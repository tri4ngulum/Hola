<?php

namespace App\Controllers;

class Usuarios extends BaseController
{
    private function crear_vista($nombre_vista = '', $datos = array()){
        $activeTab = 'usuarios';
        $datos['menu'] = crear_menu_panel($activeTab);
        // $datos['menu'] = '';
        return view($nombre_vista, $datos);
    }

    private function cargar_datos($case){
        $datos = array();

        $datos['nombre_pagina'] = 'Usuario';
        $datos['tarea'] = 'Usuario';

        switch ($case) {
            case 0:
            $breadcrumb = array(
                array(
                'tarea' => 'Usuario',
                'href' => '#' 
                )
            );
                break;
            case 1:
            $breadcrumb = array(
                array(
                'tarea' => 'Usuario',
                'href' => route_to('usuario') 
                ),
                array(
                'tarea' => 'Nuevo Usuario',
                'href' => '#' 
                ),
            );
                break;
            case 2:
             $breadcrumb = array(
                array(
                'tarea' => 'Usuario',
                'href' => route_to('usuario') 
                ),
                array(
                'tarea' => 'Detalles Usuario',
                'href' => '#' 
                ),
            );
                break;
        }
        
        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        return $datos;
    }

    public function addUsuario(){
        return $this->crear_vista('panel/usuario_nuevo', $this->cargar_datos(1));
    }
    
    public function detUsuario(){
        return $this->crear_vista('panel/usuario_detalles', $this->cargar_datos(1));
    }

    public function index(){
        return $this->crear_vista('panel/usuarios', $this->cargar_datos(0));
    }
}
