<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adicionar extends CI_Controller {

    public function index()
    {
        $this->output->enable_profiler(FALSE);

        $this->load->model('meio_model');
        $meios = $this->meio_model->read_meio();

        $this->load->model('tipo_model');
        $tipos = $this->tipo_model->read_tipo();

        $dados = array("meios" => $meios, "tipos" => $tipos);

        $this->load->view('template/header.php');
        $this->load->view('template/navi.php');
        $this->load->view('adicionar/index.php', $dados);
        $this->load->view('template/footer.html');
    }
}