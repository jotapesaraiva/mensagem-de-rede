<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $head['css'] = load_css(array('bootstrap.min', 'DT_bootstrap', 'bootstrap-select', 'bootstrap-wysihtml5', 'prettify', 'template'));
        $head['js'] = load_js(array('jquery-1.11.1.min', 'wysihtml5-0.3.0', 'bootstrap-wysihtml5', 'bootstrap.min', 'bootstrap-datetimepicker.min', 'bootstrap-datetimepicker.pt-BR', 'jquery.dataTables', 'DT_bootstrap', 'bootstrap-select'));

		$this->load->model('mensagem');
        $dados['datas'] = $this->mensagem->listaMensagem();

        $this->load->view('template/header.php', $head);
		$this->load->view('template/navi.php');
		//$this->load->view('welcome_message', $dados);
		$this->load->view('template/footer.html');
	}
/*    public function index(){
        $this->load->helper('getmes');
        $this->load->view('teste');
    }*/
}
