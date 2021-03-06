<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajuda extends CI_Controller {

    public function index() {
        $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

        $this->load->view('template/header.php', $data);
        $this->load->view('template/navi.php');
        $this->load->view('ajuda/help.php');
        $this->load->view('template/footer.html');
    }
}