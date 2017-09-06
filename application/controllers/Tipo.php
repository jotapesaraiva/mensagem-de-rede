<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

    public function index() {
        $this->output->enable_profiler(FALSE);

        $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

        $this->load->model('tipo_model');
        $tipos = $this->tipo_model->read_tipo();

        $dados = array("tipos" => $tipos);

        $this->load->view('template/header.php', $data);
        $this->load->view('template/navi.php');
        $this->load->view('tipo/index.php', $dados);
        $this->load->view('template/footer.html');

        $this->load->view('tipo/delete_modal.php');
    }

        public function adicionar(){
    /*      $this->load->model('meio_model');
            $meios = $this->meio_model->read_meio();

            $dados = array("meios" => $meios);*/
            $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
            $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

            $this->load->view('template/header.php', $data);
            $this->load->view('template/navi.php');
            $this->load->view('tipo/add.php');
            $this->load->view('template/footer.html');

        }

        public function editar($id){

            $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
            $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

            $this->load->model('tipo_model');
            $tipo = $this->tipo_model->busca_tipo($id);
            $dados = array("tipo" => $tipo);

            $this->load->view('template/header.php', $data);
            $this->load->view('template/navi.php');
            $this->load->view('tipo/edit.php', $dados);
            $this->load->view('template/footer.html');
        }
}