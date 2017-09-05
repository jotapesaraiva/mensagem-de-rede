<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
            <div class="row">
                <p>
                    <?php echo anchor('tipo/adicionar', '<i class="icon-plus"></i> Adicionar', 'class="btn"'); ?>
                </p>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr style="background: #A2B5CD;"><!--#F08080-->
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($tipos as $tipo) :
                        ?>
                        <tr>
                            <td><?= $tipo['id']?></td>
                            <td><?= utf8_encode($tipo['nome'])?></td>
                            <td>
                                <?php echo anchor('tipo/editar/'. $tipo['id'], '<i class="icon-pencil icon-white"></i>', 'class="btn btn-success"'); ?>
                            </td>
                            <td>
                                <a data-toggle="modal" href=#tipoDelete id="<?=$tipo['id']?>" class="btn btn-danger"><i class="icon-remove icon-white"></i></a>
                            </td>
                        </tr>
                        <?php
                            endforeach
                        ?>
                    </tbody>
                </table>
            </div>