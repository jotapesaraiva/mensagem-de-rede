<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{

    public function buscaUsuario1($conexao, $usuario, $senha) {
        $senhaMd5 = md5($senha);
        $usuario = mysqli_real_escape_string($conexao, $usuario);
        $query = "select * from usuarios where usuario='{$usuario}' and senha='{$senhaMd5}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }


    public function listaUsuario() { //usado na pagina usuarios para lista os usuarios
        $this->db->select('u.*, n.nome as nivel_nome');
        $this->db->from('usuarios as u');
        $this->db->join('nivel as n', 'u.nivel = n.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function busca_usuario($conexao, $usuario) { //usado na autenticação do usuario.
        //$senhaMd5 = md5($senha);
        $usuario = mysqli_real_escape_string($conexao, $usuario);
        $query = "select * from usuarios where usuario='{$usuario}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

    public function enviaContato($conexao, $notify) {// usado para listar quem ira receber email de notificação
        $notify_admins = array();
        $resultado = mysqli_query($conexao, "SELECT email FROM  usuarios WHERE  notify='{$notify}'");
        while($notify_admin = mysqli_fetch_assoc($resultado)) {
            array_push($notify_admins, $notify_admin);
        }
        return $notify_admins;
    }

    public function read_usuarios($conexao) { //em desuso. substituido pelo listausuario.
        $usuarios = array();
        $query = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conexao, $query);
        while($usuario = mysqli_fetch_assoc($resultado)) {
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function read_usuario($id) { //usado no userupdate para lista um usuario especifico.
        $this->db->where("id", $id);
        $resultado = $this->db->get("usuarios")->row_array();
        return $resultado;
    }

    public function delete_usuario($conexao, $id) {
        $query = "DELETE FROM usuarios WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }

    public function create_usuario($conexao, $usuario, $nome, $email, $senha, $nivel, $notify) {
        $senhaMd5 = md5($senha);
        $query = "INSERT INTO usuarios (usuario, nome, email, senha, nivel, notify) values ('{$usuario}', '{$nome}', '{$email}', '{$senhaMd5}', {$nivel}, {$notify})";
        return mysqli_query($conexao, $query);
    }

    public function update_usuario($conexao, $id, $usuario, $nome, $email, $senha, $nivel, $notify) {
        $senhaMd5 = md5($senha);
        $query = "UPDATE usuarios SET usuario = '{$usuario}', nome = '{$nome}', email = '{$email}', senha='{$senhaMd5}', nivel = {$nivel}, notify = {$notify} WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }

    public function update_user_AD($conexao, $id, $senha) {
        $senhaMd5 = md5($senha);
        $query = "UPDATE usuarios SET senha='{$senhaMd5}' WHERE id = '{$id}'";
        return mysqli_query($conexao, $query);
    }
}