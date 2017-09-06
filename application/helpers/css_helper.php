<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Helper to load javascript files into your project.
 * @author William Rufino
 * @version 1.0
 * @param array $js
 */
function load_css($arquivo=NULL){
    if ($arquivo !=NULL):
        $retorno = '';
        if (is_array($arquivo)):
            foreach ($arquivo as $css) :
                $retorno .='<link href="'.base_url("public/css/$css.css").'" rel="stylesheet" type="text/css" />'."\n";
            endforeach;
        else:
                $retorno .='<link href="'.base_url("public/css/$arquivo.css").'" rel="stylesheet" type="text/css" />'."\n";
        endif;
    endif;
    return $retorno;
}