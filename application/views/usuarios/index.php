<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <p>
        <?php echo anchor('usuarios/adicionar', '<i class="icon-plus"></i> Adicionar', 'class="btn"'); ?>
    </p>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
            <tr style="background: #A2B5CD;"><!--#F08080-->
                <th>Usuário</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nível</th>
                <th>Avaliar</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $usuario) :
            ?>
            <tr>
                <td><?=$usuario['usuario']?></td>
                <td><?=utf8_encode($usuario['nome'])?></td>
                <td><?=$usuario['email']?></td>
                <td><?=$usuario['nivel_nome']?></td>
                <td><?php if ($usuario['notify'] == 1):
                            echo "Sim";
                          else :
                            echo "Não";
                          endif;?></td>
                <td>
                    <?php echo anchor('usuarios/editar/'. $usuario['id'], '<i class="icon-pencil icon-white"></i>', 'class="btn btn-success"'); ?>
                </td>
                <td>
                    <a data-toggle="modal" href=#userDelete id="<?=$usuario['id']?>" class="btn btn-danger"><i class="icon-remove icon-white"></i></a>
                </td>
            </tr>
            <?php
                endforeach
            ?>
        </tbody>
    </table>
</div>