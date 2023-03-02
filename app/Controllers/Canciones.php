<?php

namespace App\Controllers;

class Canciones extends BaseController
{
    private function crear_vista($nombre_vista = '', $datos = array()){
        $activeTab = 'canciones';
        $datos['menu'] = crear_menu_panel($activeTab);
        // $datos['menu'] = '';
        return view($nombre_vista, $datos);
    }

    private function cargar_datos($case){
        $datos = array();

        $datos['nombre_pagina'] = 'Canciones';
        $datos['tarea'] = 'Canciones';

         switch ($case) {
            case 0:
            $breadcrumb = array(
                array(
                'tarea' => 'Canciones',
                'href' => '#' 
                )
            );
                break;
            case 1:
            $breadcrumb = array(
                array(
                'tarea' => 'Canciones',
                'href' => route_to('canciones') 
                ),
                array(
                'tarea' => 'Nueva Cancion',
                'href' => '#' 
                ),
            );
                break;
            case 2:
             $breadcrumb = array(
                array(
                'tarea' => 'Canciones',
                'href' => route_to('canciones') 
                ),
                array(
                'tarea' => 'Detalles Cancion',
                'href' => '#' 
                ),
            );
                break;
        }
 

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        return $datos;
    }

    public function addCancion(){
        return $this->crear_vista('panel/cancion_nueva', $this->cargar_datos(1));
    }

    public function detCancion(){
        return $this->crear_vista('panel/cancion_detalles', $this->cargar_datos(2));
    }

    public function index(){
        return $this->crear_vista('panel/canciones', $this->cargar_datos(0));
    }
}