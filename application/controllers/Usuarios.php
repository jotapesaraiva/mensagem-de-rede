<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function index(){
        $this->output->enable_profiler(FALSE);

        $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

        $this->load->model('usuario_model');
        $dados['usuarios'] = $this->usuario_model->listaUsuario();
        //$usuarios = $this->usuario_model->listaUsuario();
        //$dados = array("usuarios" => $usuarios);

        $this->load->view('template/header.php', $data);
        $this->load->view('template/navi.php');
        $this->load->view('usuarios/index.php', $dados);
        $this->load->view('template/footer.html');

        $this->load->view('usuarios/delete_modal.php');
    }

    public function adicionar(){
/*      $this->load->model('meio_model');
        $meios = $this->meio_model->read_meio();

        $dados = array("meios" => $meios);*/
        $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

        $this->load->view('template/header.php', $data);
        $this->load->view('template/navi.php');
        $this->load->view('usuarios/add.php');
        $this->load->view('template/footer.html');
    }

    public function editar($id){

        $data['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $data['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

        $this->load->model('usuario_model');
        $this->load->model('nivel_model');
        $usuarios = $this->usuario_model->read_usuario($id);
        $nivels = $this->nivel_model->read_nivel();
        $dados = array("usuarios" => $usuarios, "nivels" => $nivels);

        $this->load->view('template/header.php', $data);
        $this->load->view('template/navi.php');
        $this->load->view('usuarios/edit.php', $dados);
        $this->load->view('template/footer.html');
    }

    public function deletar($id){
        $this->load->model('usuario_model');
        $usuarios = $this->usuario_model->del_usuario($id);
    }
}