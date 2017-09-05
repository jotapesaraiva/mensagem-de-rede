<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$notify = $usuarios['notify'] ? "checked='checked'" : "";
?>

<div class="well span4 offset6">

    <legend>Alterar Usuário</legend>

    <form action="userupdate.php" method="post">
    <input type="hidden" name="id" value="<?=$usuarios['id']?>">

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="usuario">Usuário</label>
              <div class="controls">
                <input name="usuario" type="text" placeholder="usuário de rede" class="input-xlarge" required="" value="<?=$usuarios['usuario'];?>">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="nome">Nome</label>
              <div class="controls">
                <input name="nome" type="text" placeholder="nome completo" class="input-xlarge" required="" value="<?=utf8_encode($usuarios['nome']);?>">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="email">Email</label>
              <div class="controls">
                <input name="email" type="email" placeholder="email" class="input-xlarge" required="" value="<?=$usuarios['email'];?>">
              </div>
            </div>

            <!-- Select Basic -->
            <div class="control-group">
              <label class="control-label" for="nivel">Nível</label>
              <div class="controls">
                <select name="nivel" class="input-xlarge">
                <?php foreach($nivels as $nivel) :
                    //$select = ($usuarios['nivel'], $nivel['id_nivel']) ? "selected='selected'" : "";
                    $essaEhACategoria = $usuarios['nivel'] == $nivel['id'];
                    $select = $essaEhACategoria ? "selected='selected'" : "";
                    ?>
                  <option value="<?=$nivel['id']?>" <?=$select?>><?=$nivel['nome']?></option>
                <?php endforeach ?>
                </select>
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="notify">Receber notificação</label>
              <div class="controls">

                  <input type="checkbox" name="notify" <?=$notify?> value="true">

              </div>
            </div>

            <hr />

            <div class="control-group">
              <label class="control-label" for="salvar"></label>
              <div class="controls pull-right">
                <button name="atualizar" type="submit" class="btn btn-success">Atualizar</button>
                <?php echo anchor('usuarios', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
              </div>
            </div>
    </form>
</div>