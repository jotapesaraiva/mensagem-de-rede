<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

		<div class="row">
                    <?php
                //$key = array_search("Autorizada", array_column($datas, 'status_nome'));
                ?>
			<div class="span10 offset4">
				<form id="form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label class="checkbox inline">
						<input type='checkbox' name='pendente' onchange="this.form.submit()" <?=$_POST['pendente'] ? "checked='checked'" : "";?> /><b class="text-error">Pendente</b>
					</label>
					<label class="checkbox inline">
						<input type='checkbox' name='autorizada' onchange="this.form.submit()" <?=$_POST['autorizada'] ? "checked='checked'" : "";?> /><b class="text-success">Autorizada</b>
					</label>
					<label class="checkbox inline">
						<input type='checkbox' name='indeferida' onchange="this.form.submit()" <?=$_POST['indeferida'] ? "checked='checked'" : "";?> /><b class="text-warning">Indeferida</b>
					</label>
					<label class="checkbox inline">
						<input type='checkbox' name='finalizada' onchange="this.form.submit()" <?=$_POST['finalizada'] ? "checked='checked'" : "";?> /><b class="text-info">Finalizada</b>
					</label>
					<br/>
					<label class="checkbox inline">
						Mês: <select name="mes" class="select" onchange="this.form.submit()">
									<?php foreach($meses as $value => $nome): ?>
								<option value="<?=$value?>"  <?=($_POST['mes']==$value) ? "selected" : "" ?> ><?=$nome?></option>
									<?php endforeach;?>
							</select>
					</label>
					<label class="checkbox inline">
						Ano: <select name="ano" class="select" onchange="this.form.submit()">
									<?php for($a = 2012; $a <= $curr_year; $a++) {?>
								<option value="<?=$a?>" <?=($_POST['ano']==$a) ? "selected"  : "" ?> ><?=$a?></option>
									<?php	}?>
							</select>
					</label>
				</form>
			</div>
		</div>
		<div class="row">
			<p> Mensagem(ns) de Rede em <b><?= $meses[$_POST['mes']] ?>/ <?= $_POST['ano'] ?></b>
					<?php
					if (isset($_POST['pendente'])){ echo " <b>Pendente</b> "; }
					if (isset($_POST['autorizada'])){ echo " <b>Autorizada</b> "; }
					if (isset($_POST['indeferida'])){ echo " <b>Indeferida</b> "; }
					if (isset($_POST['finalizada'])){ echo " <b>Finalizada</b> "; }
					?>
			</p>
		</div>

		<div class="row">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				<thead>
					<tr style="background: #A2B5CD;"><!--#828282 #F08080 #7EC0EE-->
						<th>Código</th>
						<th>Título</th>
						<th> Solicitante </th>
						<th>Solicitado em</th>
						<th> Avaliador </th>
						<th>Analisado em</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($datas as $data) :

						switch($data['status'])	{
							case 1:	$class = 'class="text-error"'; 		break; //Pendente
							case 2:	$class = 'class="text-success"'; 	break; //Autorizado
							case 3:	$class = 'class="text-warning"';	break;  //Indeferido
							case 4:	$class = 'class="text-info"'; 		break;    //Finalizado
							case 5:	$class = 'class="text-warning"'; 	break; //Imediato
						} ?>
						<tr>
							<td><a data-toggle="modal" href="#readmodal" id="<?=$data['id']?>" class="text-info"><?=$data['id'] ?></a></td>
							<td><?=utf8_encode($data['titulo'])?></td>
							<td><?=$data['usuario_post'] ?></td>
							<td><?=$data['datapost'] ?></td>
							<td><?=utf8_encode($data['usuario_avaliador'])?></td>
							<td><?=$data['dataavaliada'] ?></td>
							 <?php if (nivelAdmin()) :?>
							<td><a <?=$class?> href="update.php?id=<?=$data['id']?>"><b><?=$data['status_nome'] ?></b></a></td>
							<?php else :?>
							<td><b <?=$class?> ><?=$data['status_nome'] ?></b></td>
							<?php endif;?>
						</tr>

					  <?php endforeach ?>
				</tbody>
			</table>
		</div>
