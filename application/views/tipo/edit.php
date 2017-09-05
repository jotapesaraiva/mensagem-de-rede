<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="well span4 offset4">
    <form action="tipoupdate.php" method="post">
    <input type="hidden" name="id" value="<?=$tipo['id']?>">

            <legend>Alterar Destinatário</legend>

            <div class="control-group">
              <label class="control-label">ID</label>
              <div class="controls">
                <input name="id" type="text" placeholder="id do tipo" class="input-xlarge" required="" value="<?=$tipo['id'];?>">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label">Tipo</label>
              <div class="controls">
                <input name="tipo" type="text" placeholder="tipo de envio" class="input-xlarge" required="" value="<?=$tipo['nome'];?>">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="salvar"></label>
              <div class="controls">
                <button name="atualizar" type="submit" class="btn btn-success">Atualizar</button>
                <?php echo anchor('tipo', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
              </div>
            </div>
    </form>
</div>