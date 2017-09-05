<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

    public function index()
    {
        $this->output->enable_profiler(FALSE);

        $this->load->model('tipo_model');
        $tipos = $this->tipo_model->read_tipo();

        $dados = array("tipos" => $tipos);

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('tipo/index.php', $dados);
        $this->load->view('template/footer.html');

        $this->load->view('tipo/delete_modal.php');
    }

        public function adicionar(){
    /*      $this->load->model('meio_model');
            $meios = $this->meio_model->read_meio();

            $dados = array("meios" => $meios);*/

            $this->load->view('template/header.php');
            $this->load->view('template/navi.php');
            $this->load->view('tipo/add.php');
            $this->load->view('template/footer.html');

        }

        public function editar($id){
            $this->load->model('tipo_model');
            $tipo = $this->tipo_model->busca_tipo($id);
            $dados = array("tipo" => $tipo);

            $this->load->view('template/header.php');
            $this->load->view('template/navi.php');
            $this->load->view('tipo/edit.php', $dados);
            $this->load->view('template/footer.html');
        }
}