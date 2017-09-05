<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$data = array("titulo" => "", "mensagem" => "", "assinatura" => "", "observacao" => "", "data_inicio" => "", "data_final" => "", "ip" => "", "tipo" => "", "imediata" => "");
?>


<div class="well span11 offset2">
    <form action="create.php" method="post">

        <legend>Adicionar Mensagem</legend>

            <div class="row">
              <div class="span4">


                        <div class="control-group">
                        <label class="control-label">Lista de destinatários</label>
                        <div class="controls">
                          <select id="ip" name="ip[]" class="selectpicker" multiple data-live-search="true" required>
                          <?php foreach($meios as $meio) :
                          $select = in_array($meio['id'], str_split($data['ip'])) ? "selected='selected'" : "";?>
                            <option value="<?=$meio['id']?>" <?=$select?>><?=$meio['local']?></option>
                          <?php endforeach ?>
                          </select>
                        </div>
                        </div>


                        <div class="control-group">
                        <label class="control-label">Tipo da Mensagem</label>
                        <div class="controls">
                            <?php foreach($tipos as $tipo) : $checked2 = in_array($tipo['id'], str_split($data['tipo'])) ? "checked='checked'" : "";?>
                              <label class="checkbox inline" for="tipo-0"><input type="checkbox" name="tipo[]"  value="<?=$tipo['id']?>" <?=$checked2?>><?=$tipo['nome']?> </label>
                            <?php endforeach ?>
                        </div>
                       </div>


                        <div class="control-group">
                        <label class="control-label">Envio Imediato</label>
                        <div class="controls">
                          <label class="radio inline" for="imediata"><input type="radio" name="imediata" <?= ($data['imediata'] == '1') ? 'checked="checked"' : ''?> value="1">Sim</label>
                          <label class="radio inline" for="imediata"><input type="radio" name="imediata" <?= ($data['imediata'] == '0') ? 'checked="checked"' : ''?> value="0">Não</label>
                        </div>
                       </div>



                        <div class="control-group">
                          <label class="control-label" for="data_inicio">Data inicial</label>
                          <div id="data_inicio" class="input-append date">
                          <input data-format="dd/MM/yyyy hh:mm:ss" value="<?=$data['data_inicio'];?>" name="data_inicio" type="text" required> </input>
                          <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                            </i>
                          </span>
                          </div>
                        </div>
                        <script type="text/javascript">
                          $(function() {
                          $('#data_inicio').datetimepicker({
                            language: 'pt-BR',
                            pickSeconds: false         // disables seconds in the time picker
                          });
                          });
                        </script>



                        <div class="control-group">
                          <label class="control-label" for="data_final">Data final</label>
                          <div id="data_final" class="input-append date">
                          <input data-format="dd/MM/yyyy hh:mm:ss" value="<?=$data['data_final'];?>" name="data_final" type="text" required></input>
                          <span class="add-on">
                            <i data-time-icon="icon-time" data-date-icon="icon-calendar">
                            </i>
                          </span>
                          </div>
                        </div>
                        <script type="text/javascript">
                          $(function() {
                          $('#data_final').datetimepicker({
                            language: 'pt-BR',
                            pickSeconds: false         // disables seconds in the time picker
                          });
                          });
                        </script>


              </div>
              <div class="span4">



                        <div class="control-group">
                        <label class="control-label">Titulo</label>
                        <div class="controls">
                          <input name="titulo" type="text"  placeholder="Digite o titulo da Mensagem..." class="input-xxlarge" required value="<?=utf8_encode($data['titulo']);?>">
                        </div>
                        </div>


                        <div class="control-group">
                        <label class="control-label">Mensagem</label>
                        <div class="controls">
                          <textarea name="mensagem" type="textarea" placeholder="Digite o conteudo da Mensagem..." class="input-xxlarge" rows="10" required nKeyDown="conta()" onKeyUp="conta()"><?=utf8_encode($data['mensagem']);?></textarea>
                        </div>
                        </div>


                        <div class="control-group">
                        <label class="control-label">Assinatura</label>
                        <div class="controls">
                          <input name="assinatura" type="text" placeholder="Assinatura" class="input-xxlarge" required value="<?=utf8_encode($data['assinatura']);?>">
                        </div>
                        </div>


                        <div class="control-group">
                        <label class="control-label">Observação</label>
                        <div class="controls">
                          <textarea name="observacao" type="textarea" placeholder="Observação" class="input-xxlarge" rows="4" nKeyDown="conta()" onKeyUp="conta()"><?=utf8_encode($data['observacao']);?></textarea>
                        </div>
                        </div>

              </div>

            </div>


        <hr />
              <div class="control-group">

                <div class="controls pull-right">
                <button type="submit" class="btn btn-success">Salvar</button>
                  <a class="btn btn-danger" href="index.php">Voltar</a>
                </div>

              </div>

          </form>
        </div>