<?php

namespace App\Controllers;

class Generos extends BaseController
{
    private function crear_vista($nombre_vista = '', $datos = array()){
        $activeTab = 'generos';
        $datos['menu'] = crear_menu_panel($activeTab);
        return view($nombre_vista, $datos);
    }

    private function cargar_datos($case){
        $datos = array();

        $datos['nombre_pagina'] = 'Generos';
        $datos['tarea'] = 'Generos';

         switch ($case) {
            case 0:
            $breadcrumb = array(
                array(
                'tarea' => 'Generos',
                'href' => '#' 
                )
            );
                break;
            case 1:
            $breadcrumb = array(
                array(
                'tarea' => 'Generos',
                'href' => route_to('generos') 
                ),
                array(
                'tarea' => 'Nuevo Generos',
                'href' => '#' 
                ),
            );
                break;
            case 2:
             $breadcrumb = array(
                array(
                'tarea' => 'Generos',
                'href' => route_to('generos') 
                ),
                array(
                'tarea' => 'Detalles Genero',
                'href' => '#' 
                ),
            );
                break;
        }
 

        $datos['breadcrumb']  = breadcrumb($datos['tarea'], $breadcrumb);

        return $datos;
    }

    public function addGenero(){
        return $this->crear_vista('panel/genero_nuevo', $this->cargar_datos(1));
    }

    public function detGenero(){
        return $this->crear_vista('panel/genero_detalles', $this->cargar_datos(2));
    }

    public function index(){
        return $this->crear_vista('panel/generos', $this->cargar_datos(0));
    }
}