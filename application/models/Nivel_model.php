<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nivel_model extends CI_Model{

    public function read_nivel() {
        return $this->db->get("nivel")->result_array();
    }

    public function busca_nivel($id) { //usado no nivelupdate para lista um nivel especifico.
        $this->db->where("id", $id);
        $resultado = $this->db->get("nivel")->row_array();
        return $resultado;
    }

    public function delete_nivel($conexao, $id) {
        //return $this->db->delete("meio", array('id' => $id));
        //$this->db->where('id', $id);
        //return $this->db->delete('meio');
        $query = "DELETE FROM nivel WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

    public function create_nivel($conexao, $nome) {
        //$this->db->insert("meio", $create_meio);
        $query = "INSERT INTO nivel (nome) values ('{$nome}')";
        return mysqli_query($conexao, $query);
    }

    public function update_nivel($conexao, $id,  $nome) {
        //$data = array(
        //'local' => $local,
        //'ip' => $ip,
        //expressao => $expressao
        //);
        //$this->db->where('id', $id);
        //$this->db->update('meio', $data);
        $query = "UPDATE nivel SET nome = '{$nome}' WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

}