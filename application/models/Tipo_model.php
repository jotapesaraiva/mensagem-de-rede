<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipo_model extends CI_Model{

    public function read_tipo() {
        return $this->db->get("tipo")->result_array();
    }

    public function busca_tipo($id) { //usado no tipoupdate para lista um tipo especifico.
        $this->db->where("id", $id);
        $resultado = $this->db->get("tipo")->row_array();
        return $resultado;
    }

    public function delete_tipo($conexao, $id) {
        //return $this->db->delete("meio", array('id' => $id));
        //$this->db->where('id', $id);
        //return $this->db->delete('meio');
        $query = "DELETE FROM tipo WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

    public function create_tipo($conexao, $nome) {
        //$this->db->insert("meio", $create_meio);
        $query = "INSERT INTO tipo (nome) values ('{$nome}')";
        return mysqli_query($conexao, $query);
    }

    public function update_tipo($conexao, $id,  $nome) {
        //$data = array(
        //'local' => $local,
        //'ip' => $ip,
        //expressao => $expressao
        //);
        //$this->db->where('id', $id);
        //$this->db->update('meio', $data);
        $query = "UPDATE tipo SET nome = '{$nome}' WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

}