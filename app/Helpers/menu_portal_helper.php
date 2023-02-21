<?php
function configurar_menu($folder = '', $pagina = '')
{
  $menu = array();
  $menu_item = array();
  $sub_menu_item = array();

  $menu_item['is_active'] = ($pagina == "index") ? TRUE : FALSE;
  $menu_item['href'] = ($folder != '') ? '../../index.php' : './index.php';
  $menu_item['text'] = 'Inicio';
  $menu_item['submenu'] = array();
  $menu['inicio'] = $menu_item;

  $menu_item['is_active'] = ($pagina == "genero") ? TRUE : FALSE;
  $menu_item['href'] = '#';
  $menu_item['text'] = 'Géneros';
  $menu_item['submenu'] = array();

  $sub_menu_item = array();
  $sub_menu_item['is_active'] = FALSE;
  $sub_menu_item['href'] = ($folder != '') ? './accion.php' : './portal/pages/accion.php';
  $sub_menu_item['text'] = 'Acción';
  $menu_item['submenu']['accion'] = $sub_menu_item;
  //
  $sub_menu_item = array();
  $sub_menu_item['is_active'] = FALSE;
  $sub_menu_item['href'] = ($folder != '') ? './animacion.php' : './portal/pages/animacion.php';
  $sub_menu_item['text'] = 'Animación';
  $menu_item['submenu']['animacion'] = $sub_menu_item;
  $menu['generos'] = $menu_item;
  return $menu;
}



function crear_menu_portal($folder = '', $pagina = '')
{
  $menu = configurar_menu($folder, $pagina);
  $html = '';
  $html .= '<ul>';
  foreach ($menu as $item) {
    if ($item['href'] != '#') {
      $html .= '<li class="' . ($item["is_active"] ? 'active' : '') . '"><a href="' . $item["href"] . '">' . $item["text"] . '</a></li>';
    } else {
      $html .= '<li class="' . ($item["is_active"] ? 'active' : '') . '"><a href="#">' . $item["text"] . ' <span class="arrow_carrot-down"></span></a>
                    <ul class="dropdown">';
      if (sizeof($item['submenu']) > 0) {
        foreach ($item['submenu'] as $item_sub_menu) {
          $html .= '<li><a href="' . $item_sub_menu["href"] . '">' . $item_sub_menu["text"] . '</a></li>';
        }
      }

      $html .= '</ul></li>';
    }
  }
  $html .= '</ul>';
  return $html;
}