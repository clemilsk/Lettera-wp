<?php 

//Menu list
function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
        $menu_list  = '<ul id="mlist" class="menu-list">' ."\n";

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
 
        /*$menu_list .= '<li>' ."\n";
        $menu_list .= '<a href="' . home_url() . '"></a>' ."\n";
        $menu_list .= '</li>' ."\n";*/
        

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                $menu_array = array();
                
                $bool = true;
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li class="li-dropdown"><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {

                    $retiraAc = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(Ç)/","/(ç)/","/(Ã)/"),explode(" ","a A e E i I o O u U n N C c A"),$menu_item->title);
                    $tituloclass = $retiraAc;

                    $menu_list .= '<li>' ."\n";
                    $menu_list .= '<a href="' . $menu_item->url . '" id="'.strtolower($tituloclass).'" data-titulo-type="'.strtolower($tituloclass).'">'. $menu_item->title . '<i class="fa-solid fa-chevron-down tms"></i></a>' ."\n";   
                    $menu_list .= '<ul id="dropdown" class="dropdown">' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '</ul>' ."\n";

                } else {
                        $menu_list .= '<li>' ."\n";
                        $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>' ."\n";
            $menu_list .= '</li>' ."\n";
            $menu_list .= '</li>' ."\n";
        }
          
        $menu_list .= '</ul>' ."\n";

    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    echo $menu_list;
}