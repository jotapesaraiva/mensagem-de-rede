<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="well span4 offset5">
    <form action="" method="post">

    <legend>Adicionar Meio</legend>

        <div class="control-group">
            <label class="control-label">Local</label>
            <div class="controls">
                <input name="local" type="text" placeholder="nome do local" class="input-xlarge" required="" value="">
            </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
            <label class="control-label">IP</label>
            <div class="controls">
                <input name="ip" type="text" placeholder="ip do local" class="input-xlarge" required="" value="">
            </div>
        </div>

        <!-- Text input-->
        <div class="control-group">
            <label class="control-label">Expressão</label>
            <div class="controls">
                <input name="expressao" type="text" placeholder="Expressão regular" class="input-xlarge" required="" value="">
            </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="salvar"></label>
          <div class="controls">
            <button name="adicionar" type="submit" class="btn btn-success">Adicionar</button>
            <?php echo anchor('meio', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
          </div>
        </div>

    </form>
</div>