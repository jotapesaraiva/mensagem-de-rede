<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Corpo da Pagina-->
            <div class="row">
                <p>
                    <?php echo anchor('meio/adicionar', '<i class="icon-plus"></i> Adicionar', 'class="btn"'); ?>
                </p>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr style="background: #A2B5CD;"><!--#F08080-->
                            <th>ID</th>
                            <th>Local</th>
                            <th>IP</th>
                            <th>Expressão</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($meios as $meio) :
                        ?>
                        <tr>
                            <td><?= $meio['id']?></td>
                            <td><?= utf8_encode($meio['local'])?></td>
                            <td><?= $meio['ip']?></td>
                            <td><?= $meio['expressao']?></td>
                            <td>
                            <?php echo anchor('meio/editar/'. $meio['id'], '<i class="icon-pencil icon-white"></i>', 'class="btn btn-success"'); ?>
                            </td>
                            <td>
                                <a data-toggle="modal" href=#meioDelete id="<?=$meio['id']?>" class="btn btn-danger"><i class="icon-remove icon-white"></i></a>
                            </td>
                        </tr>
                        <?php
                            endforeach
                        ?>
                    </tbody>
                </table>
            </div>