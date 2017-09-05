<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class=" well span4 offset5">
    <form action="niveladd.php" method="post">
    <input type="hidden" name="id" value="">
            <legend>Adicionar Nível</legend>

            <div class="control-group">
              <label class="control-label">ID</label>
              <div class="controls">
                <input name="id" type="text" placeholder="id do usuário" class="input-xlarge" required="" value="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label">Nível</label>
              <div class="controls">
                <input name="nivel" type="text" placeholder="nivel de acesso" class="input-xlarge" required="" value="">
              </div>
            </div>


            <hr />
            <div class="control-group">
              <label class="control-label" for="salvar"></label>
              <div class="controls pull-right">
                <button name="adicionar" type="submit" class="btn btn-success">Adicionar</button>
                <?php echo anchor('nivel', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
              </div>
            </div>
    </form>
</div>