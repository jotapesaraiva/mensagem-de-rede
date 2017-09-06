<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Helper to load javascript files into your project.
 * @author William Rufino
 * @version 1.0
 * @param array $js
 */
function load_js($arquivo=NULL, $remoto=FALSE){
 if ($arquivo !=NULL):
        $retorno = '';
        if (is_array($arquivo)):
            foreach ($arquivo as $js):
                if ($remoto):
                    $retorno .='<script type="text/javascript" src=" public/js/'.$js.'.js "></script>'."\n";
                else:
                    $retorno .='<script type="text/javascript" src=" '.base_url("public/js/$js.js").' "></script>'."\n";
                endif;
            endforeach;
        else:
            if ($remoto):
                    $retorno .='<script type="text/javascript" src=" '.$arquivo.' "></script>'."\n";
                else:
                    $retorno .='<script type="text/javascript" src=" '.base_url("public/js/$arquivo.js").' "></script>'."\n";
                endif;
        endif;
    endif;
    return $retorno;
}

/*
function load_js($arquivo=NULL){
    if(!is_array($arquivo)){
        return false;
    }

    $returno = '';
    foreach($arquivo as $js){
        $returno .= '<script type="text/javascript" src="' . APPPATH . 'public/js/' . $js . '.js"></script>' . "\n";
    }
    return $returno;
}
*/