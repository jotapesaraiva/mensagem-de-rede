<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meio_model extends CI_Model{


    public function read_meio() {
        return $this->db->get("meio")->result_array();
    }

    public function busca_meio($id) { //usado no meioupdate para lista um meio especifico.
        $this->db->where("id", $id);
        $resultado = $this->db->get("meio")->row_array();
        return $resultado;
    }

    public function delete_meio($id) {
        //return $this->db->delete("meio", array('id' => $id));
        //$this->db->where('id', $id);
        //return $this->db->delete('meio');
        $query = "DELETE FROM meio WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

    public function create_meio($create_meio) {
        //$this->db->insert("meio", $create_meio);
        $query = "INSERT INTO meio (local, ip, expressao) values ('{$local}', '{$ip}', '{$expressao}')";
        return mysqli_query($conexao, $query);
    }

    public function update_meio($conexao, $id,  $local, $ip, $expressao) {
        //$data = array(
        //'local' => $local,
        //'ip' => $ip,
        //expressao => $expressao
        //);
        //$this->db->where('id', $id);
        //$this->db->update('meio', $data);
        $query = "UPDATE meio SET local = '{$local}', ip = '{$ip}', expressao = '{$expressao}' WHERE id = '{$id}'";
            var_dump($query);
        return mysqli_query($conexao, $query);
    }
}