<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
	<!-- Nav - barra de menu -->
    <?php //include("template/nav.php"); ?>
</div>
	<?php //mostraAlerta("success"); ?>
    <?php //mostraAlerta("danger"); ?>
	<?php //$datapbl = date("d/m/y H:i:s");?>


	<?php require_once("function/logica-usuario.php");	?>
	<div class="navbar">
	  <div class="navbar-inner">
		<!--<a class="brand" href="#">Título</a>-->
		<ul class="nav">
		  <li class="divider-vertical"></li>
		  <li class="active"><a href="index.php"><i class="icon-home"></i> Início</a></li>
		  <li class="divider-vertical"></li>
		  <li><a href="create.php"><i class="icon-plus"></i> Adicionar</a></li>
		  <?php if (nivelAdmin()) {?>
		  <li class="divider-vertical"></li>
		  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> Configuração<b class="caret"></b></a>
				<ul class="dropdown-menu">
				  <li><a href="meio.php"><i class="icon-list-alt"></i> Meio</a></li>
				  <li><a href="tipo.php"><i class="icon-cog"></i> Tipo</a></li>
				  <li><a href="nivel.php"><i class="icon-signal"></i> Nivel</a></li>
				  <li class="divider"></li>
				  <li class="nav-header">Outras</li>
				  <li><a href="function/info.php" target="_blank"><i class=" icon-info-sign"></i> Info php</a></li>
				  <li><a href="https://portal-monitoramento.sefa.pa.gov.br/piwik/" target="_blank"><i class="icon-th"></i> Análise</a></li>
				  <li><a href="userlist.php"><i class="icon-user"></i> Usuários</a></li>
				</ul>
		  </li>
		  <?php }?>
		  <li class="divider-vertical"></li>
		  <li><a href="help.php"><i class="icon-question-sign"></i> Ajuda</a></li>
		  <li class="divider-vertical"></li>
		  <li><a href="logout.php"><i class="icon-share-alt"></i> Sair</a></li>
		  <li class="divider-vertical"></li>
		</ul>
		<ul class="nav pull-right">
			<li class="divider-vertical"></li>
			<li><a href="#"><i class="icon-user"></i> Olá: <?= usuarioLogado() ?></a></li>
			<li class="divider-vertical"></li>
	    </ul>
	  </div>
	</div>
