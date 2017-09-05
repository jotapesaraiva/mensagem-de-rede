<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

            <div class="well span4 offset6">
                <form action="useradd.php" method="post">

                    <legend>Adicionar Usuário</legend>

                    <!-- Text input-->
                    <div class="control-group">
                      <label class="control-label" for="usuario">Usuário</label>
                      <div class="controls">
                        <input name="usuario" type="text" placeholder="usuário de rede" class="input-xlarge" required="" value="">
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                      <label class="control-label" for="nome">Nome</label>
                      <div class="controls">
                        <input name="nome" type="text" placeholder="nome completo" class="input-xlarge" required="" value="">
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                      <label class="control-label" for="email">Email</label>
                      <div class="controls">
                        <input name="email" type="email" placeholder="email" class="input-xlarge" required="" value="">
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

                          <input type="checkbox" name="notify"  value="true">

                      </div>
                    </div>


<hr />
                        <div class="control-group">
                          <label class="control-label" for="salvar"></label>
                          <div class="controls pull-right">
                            <button name="adicionar" type="submit" class="btn btn-success">Adicionar</button>
                            <?php echo anchor('usuarios', 'Voltar', 'id="cancelar" name="cancelar" class="btn btn-danger"'); ?>
                          </div>
                        </div>
                </form>
            </div>