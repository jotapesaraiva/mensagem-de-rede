<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function listaMensagem() {

    $this->db->select('m.*, DATE_FORMAT(m.data_post, '%d/%m/%Y %H:%i:%s') as datapost, DATE_FORMAT(m.data_avaliada, '%d/%m/%Y %H:%i:%s') as dataavaliada, s.nome as status_nome')
        ->from('msg as m')
        ->join('status as s', 'm.status = s.id')
        ->where()
        ->order_by('id')
    $data = $this->db->get()->result_array();

    $datas = array();
    $query = "SELECT m.*, DATE_FORMAT(m.data_post, '%d/%m/%Y %H:%i:%s') as datapost, DATE_FORMAT(m.data_avaliada, '%d/%m/%Y %H:%i:%s') as dataavaliada, s.nome as status_nome
             FROM msg as m
             JOIN status as s
               ON m.status = s.id WHERE ";

    if($_POST['mes'] != '0'){
        $query .= "MONTH(data_post) = ". $_POST['mes'] ."
        AND ";
    }

    $query .= "YEAR(data_post) = ". $_POST['ano'] ."";

    $status_list='';
    $j=0;

    if($_POST['pendente']){
        $status_list .= "1 ";
        $j++;
    }
    if($_POST['autorizada']){
        $status_list .= "2 ";
        $j++;
    }
    if($_POST['indeferida']){
        $status_list .= "3 ";
        $j++;
    }
    if($_POST['finalizada']){
        $status_list .= "4 ";
        $j++;
    }
    if($_POST['imediato']){
        $status_list .= " 5";
        $j++;
    }
    $status_list = trim($status_list);
    $status_list = explode(" ",$status_list);

    $status_list = "(".implode(",",$status_list).")";

    $query .= " AND m.status in $status_list ";

    $query .= "ORDER BY id";
    $resultado = mysqli_query($conexao, $query);
    while($data = mysqli_fetch_assoc($resultado)) {
    array_push($datas, $data);
    }
    return $datas;

}
//Inserido por Diego Melo, a função insere o alerta de mensagem de rede pendente na tabela de alertas do portal
function insereMsgPortal($conexao_portal,$num_msg){
    //Verifica se existe algum alerta do tipo Mensagem no portal
   $query = "SELECT * FROM tbl_monitora_alertas WHERE tipo = 'Mensagem'";
   $data_inicio=date('Y-m-d H:i:s');
   $result = mysqli_query($conexao_portal,$query);
   $maior_data = "SELECT max(data_fim) as data_final from tbl_monitora_alertas";
   $valor_maior_data = mysqli_query($conexao_portal,$maior_data);
   $valor_data_tratado = mysqli_fetch_assoc($valor_maior_data);
   //Insere o registro, Caso nao exista nenhum registro do tipo Mensagem
   if(mysqli_num_rows($result)==0){
       $query = "INSERT INTO tbl_monitora_alertas(data_inicio,data_fim,tipo,servico,servidor,alerta,detalhe,email_enviados) values "
         . "('{$data_inicio}','{$valor_data_tratado['data_final']}','Mensagem','Mensagem de Rede Pendente', 'https://portal-monitoramento.sefa.pa.gov.br/msg/index.php',"
         . "'".$num_msg." Mensagem(ns) Pendentes','Favor realizar a abertura dos registros no mantis para todas as mensagens em aberto','0' )";
       mysqli_query($conexao_portal, $query);
   }else{
       $query = "UPDATE tbl_monitora_alertas SET alerta = '".$num_msg." Mensagem(ns) Pendentes' WHERE tipo='Mensagem'";
        mysqli_query($conexao_portal, $query);
   }
}

//Inserido por Diego Melo, a função verifica o numero de mensagens com o status repassado pela variavel $status
function verificaMsgStatus($status,$conexao){
    $query = "SELECT * FROM msg WHERE status={$status}";
    $result = mysqli_query($conexao,$query);
     return mysqli_num_rows($result);
}

function atualizaStatus($conexao){
    $query = "UPDATE msg
                 SET status = '4'
               WHERE STR_TO_DATE( data_final, '%d/%m/%Y %T' ) < NOW( )
               AND status ='2'";
    return mysqli_query($conexao, $query);
}

function read_list($conexao) {
    $murais = array();
    $query = "SELECT * FROM msg";
    $resultado = mysqli_query($conexao, $query);
    while($mural = mysqli_fetch_assoc($resultado)) {
        array_push($murais, $mural);
    }
    return $murais;
}

function create($conexao, $titulo, $mensagem, $assinatura, $observacao, $data_inicio, $data_final, $usuario_post, $data_post, $usuario_avaliador, $data_avaliada, $status, $ip, $tipo,$imediata) {
    $query = "INSERT INTO msg (titulo, mensagem, assinatura, observacao, data_inicio, data_final, usuario_post, data_post, usuario_avaliador, data_avaliada, status, ip, tipo,imediata) VALUES ('{$titulo}', '".addslashes($mensagem)."', '{$assinatura}', '{$observacao}', '{$data_inicio}', '{$data_final}', '{$usuario_post}', '{$data_post}', '{$usuario_avaliador}', '{$data_avaliada}', '{$status}', '{$ip}', '{$tipo}','{$imediata}')";
    return mysqli_query($conexao, $query);
}

function update($conexao, $id, $titulo, $mensagem, $assinatura, $observacao, $data_inicio, $data_final, $ip, $tipo, $usuario_post, $data_post, $usuario_avaliador, $data_avaliada, $status,$imediata) {
    $query = "UPDATE msg SET titulo = '{$titulo}', mensagem = '".addslashes($mensagem)."', assinatura = '{$assinatura}', observacao = '{$observacao}', data_inicio = '{$data_inicio}', data_final = '{$data_final}', ip = '{$ip}', tipo = '{$tipo}', usuario_post = '{$usuario_post}', data_post = '{$data_post}', usuario_avaliador = '{$usuario_avaliador}', data_avaliada = '{$data_avaliada}', status = '{$status}', imediata = '{$imediata}' WHERE id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function read($conexao, $id) {
    $query = "SELECT * FROM msg WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function delete($conexao, $id) {
    $query = "DELETE FROM msg WHERE id = {$id}";
    return mysqli_query($conexao, $query);
}