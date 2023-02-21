<?php

//function configurar_menu($pagina = '')
    function configurar_menu(){

        $menu = array();
        $menu_item = array();
        $sub_menu_item = array();

        //Opción Dashboard
        //$menu_item['is_active'] =  ($pagina == 'dashboard') ? TRUE : FALSE;
        $menu_item['is_active'] =  TRUE;
        $menu_item['href'] = route_to('dashboard');
        $menu_item['icon'] = 'fa fa-dashboard';
        $menu_item['text'] = 'Dashboard';
        $menu_item['submenu'] = array();
        $menu['inicio'] = $menu_item;

        //Opción Usuario
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('usuarios');
        $menu_item['icon'] = 'fa fa-user';
        $menu_item['text'] = 'Usuarios';
        $menu_item['submenu'] = array();
        $menu['usuario'] = $menu_item;

        //Opción Boletos 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('canciones');
        $menu_item['icon'] = 'fa fa-music';
        $menu_item['text'] = 'Canciones';
        $menu_item['submenu'] = array();
        $menu['boletos'] = $menu_item;


        //Opción Compras 
        $menu_item['is_active'] = FALSE;
        $menu_item['href'] = route_to('generos');
        $menu_item['icon'] = 'fa fa-headphones';
        $menu_item['text'] = 'Generos';
        $menu_item['submenu'] = array();
        $menu['compras'] = $menu_item;

        return $menu;
    }//end 

    function crear_menu_panel() {
        $menu = configurar_menu();
        $html= '<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">';
            foreach ($menu as $item) {
                if($item['href'] != '#'){
                    $html.='
                    <li class="nav-item">
                        <a href="'.$item['href'].'"  class="nav-link '.($item["is_active"] ? 'active' : '').'">
                        <i class="'.$item['icon'].' nav-icon"></i>
                        <p>'.$item['text'].'</p>
                        </a>
                    </li>';
                }//end if href != # 
                else{
                    if(sizeof($item['submenu']) > 0){
                        $html.='
                        <li class="nav-item '.($item["is_active"] ? 'menu-is-opening menu-open' : '').'">
                            <a href="'.$item['href'].'" class="nav-link '.($item["is_active"] ? 'active' : '').'">
                                <i class="nav-icon '.$item['icon'].'"></i>
                                <p>
                                    '.$item['text'].'
                                    <i class="right fa fa-sort-desc"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">';
                            foreach ($item['submenu'] as $item_sub_menu) {
                                // $html.='<li><a href="'.$item_sub_menu["href"].'">'.$item_sub_menu["text"].'</a></li>';
                                $html.= '
                                    <li class="nav-item">
                                        <a href="'.$item_sub_menu["href"].'"  class="nav-link '.($item_sub_menu["is_active"] ? 'active' : '').'">
                                            <i class="'.$item_sub_menu['icon'].' nav-icon"></i>
                                            <p>'.$item_sub_menu["text"].'</p>
                                        </a>
                                    </li>
                                ';
                            }//end foreach
                            $html.='</ul>
                        </li>
                        ';
                    }//end else sizeof
                }//end else href != #
            }//end foreach
        $html.= '</ul>';
        return $html;
    }//end 