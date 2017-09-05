<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="well span4 offset5">
    <form action="tipoupdate.php" method="post">
    <input type="hidden" name="id" value="">

            <legend>Adicionar Destinatário</legend>
            <div class="control-group">
              <label class="control-label">ID</label>
              <div class="controls">
                <input name="id" type="text" placeholder="id do tipo" class="input-xlarge" required="" value="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label">Tipo</label>
              <div class="controls">
                <input name="tipo" type="text" placeholder="tipo de envio" class="input-xlarge" required="" value="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="salvar"></label>
              <div class="controls">
                <button name="adicionar" type="submit" class="btn btn-success">Adicionar</button>
                <?php echo anchor('tipo', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
              </div>
            </div>
    </form>
</div>
