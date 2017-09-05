<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel extends CI_Controller {

    public function index()
    {
        $this->output->enable_profiler(FALSE);

        $this->load->model('nivel_model');
        $nivels = $this->nivel_model->read_nivel();

        $dados = array("nivels" => $nivels);

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('nivel/index.php', $dados);
        $this->load->view('template/footer.html');

        $this->load->view('nivel/delete_modal.php');
    }

        public function adicionar(){
    /*      $this->load->model('meio_model');
            $meios = $this->meio_model->read_meio();

            $dados = array("meios" => $meios);*/

            $this->load->view('template/header.php');
            $this->load->view('template/navi.php');
            $this->load->view('nivel/add.php');
            $this->load->view('template/footer.html');

        }

        public function editar($id){
            $this->load->model('nivel_model');
            $nivel = $this->nivel_model->busca_nivel($id);
            $dados = array("nivel" => $nivel);

            $this->load->view('template/header.php');
            $this->load->view('template/navi.php');
            $this->load->view('nivel/edit.php', $dados);
            $this->load->view('template/footer.html');
        }
}