<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meio extends CI_Controller {

    public function index()
    {

        $this->output->enable_profiler(FALSE);

        $this->load->model('meio_model');
        $meios = $this->meio_model->read_meio();

        $dados = array("meios" => $meios);

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('meio/index.php', $dados);
        $this->load->view('template/footer.html');

        $this->load->view('meio/delete_modal.php');
    }

    public function adicionar(){
/*      $this->load->model('meio_model');
        $meios = $this->meio_model->read_meio();

        $dados = array("meios" => $meios);*/

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('meio/add.php');
        $this->load->view('template/footer.html');

    }

    public function deletar(){

    }

    public function editar($id){
        $this->load->model('meio_model');
        $meio = $this->meio_model->busca_meio($id);
        $dados = array("meio" => $meio);

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('meio/edit.php', $dados);
        $this->load->view('template/footer.html');
    }
}