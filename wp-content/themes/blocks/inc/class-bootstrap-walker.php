<?php

class Bootstrap_Navwalker extends Walker_Nav_Menu {


    public function start_lvl(&$output, $depth = 0, $args = null) {

        if ($depth == 0) {

            $output .= '<div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">';

        }

    }


    public function end_lvl(&$output, $depth = 0, $args = null) {

        if ($depth == 0) {

            $output .= '</div>';

        }

    }


    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {


        $title = $item->title;
        $url   = $item->url;


        // Parent Dropdown
        if ($depth == 0 && !empty($args->has_children)) {


            $output .= '
            <div class="nav-item dropdown">

                <a href="'.$url.'" 
                   class="nav-link dropdown-toggle" 
                   data-bs-toggle="dropdown">
                    '.$title.'
                </a>';

        }


        // Dropdown Child
        elseif ($depth == 1) {


            $output .= '
            <a href="'.$url.'" class="dropdown-item">
                '.$title.'
            </a>';

        }


        // Normal Menu
        else {


            $active = '';

            if (in_array('current-menu-item', $item->classes)) {
                $active = ' active';
            }


            $output .= '
            <a href="'.$url.'" 
               class="nav-item nav-link'.$active.'">
                '.$title.'
            </a>';

        }

    }



    public function end_el(&$output, $item, $depth = 0, $args = null) {


        if ($depth == 0 && !empty($args->has_children)) {

            $output .= '</div>';

        }

    }



    public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {


        if ($element->has_children) {

            $args[0]->has_children = true;

        }


        parent::display_element(
            $element,
            $children_elements,
            $max_depth,
            $depth,
            $args,
            $output
        );

    }

}