<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class=" well span4 offset4">
    <form action="nivelupdate.php" method="post">
    <input type="hidden" name="id" value="<?=$nivel['id']?>">
            <legend>Alterar Nível</legend>

            <div class="control-group">
              <label class="control-label">ID</label>
              <div class="controls">
                <input name="id" type="text" placeholder="id do usuário" class="input-xlarge" required="" value="<?=$nivel['id'];?>">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label">Nível</label>
              <div class="controls">
                <input name="nivel" type="text" placeholder="nivel de acesso" class="input-xlarge" required="" value="<?=$nivel['nome'];?>">
              </div>
            </div>

            <hr />
            <div class="control-group">
              <label class="control-label" for="salvar"></label>
              <div class="controls pull-right">
                <button name="atualizar" type="submit" class="btn btn-success">Atualizar</button>
                <?php echo anchor('nivel', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
              </div>
            </div>
    </form>
</div>