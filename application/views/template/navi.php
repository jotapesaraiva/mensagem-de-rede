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


    <?php //require_once("function/logica-usuario.php");  ?>
    <div class="navbar">
      <div class="navbar-inner">
        <!--<a class="brand" href="#">Título</a>-->
        <ul class="nav">
          <li class="divider-vertical"></li>
          <li class="active"><?php echo anchor('welcome', '<i class="icon-home"></i> Início', ' '); ?></li>
          <li class="divider-vertical"></li>
          <li><?php echo anchor('adicionar', '<i class="icon-plus"></i> Adicionar', ' '); ?></li>
          <?php //if (nivelAdmin()) {?>
          <li class="divider-vertical"></li>
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i> Configuração<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><?php echo anchor('meio', '<i class="icon-list-alt"></i> Meio', ' '); ?></li>
                  <li><?php echo anchor('tipo', '<i class="icon-cog"></i> Tipo', ' '); ?></li>
                  <li><?php echo anchor('nivel', '<i class="icon-signal"></i> Nivel', ' '); ?>
                  <li class="divider"></li>
                  <li class="nav-header">Outras</li>
                  <li><?php echo anchor('info', '<i class="icon-info-sign"></i> Info', ' '); ?></li>
                  <li><a href="https://portal-monitoramento.sefa.pa.gov.br/piwik/" target="_blank"><i class="icon-th"></i> Análise</a></li>
                  <li><?php echo anchor('usuarios', '<i class="icon-user"></i> Usuarios', ' '); ?></li>
                </ul>
          </li>
          <?php //}?>
          <li class="divider-vertical"></li>
          <li><?php echo anchor('ajuda', '<i class="icon-question-sign"></i> Ajuda', ' '); ?></li>
          <li class="divider-vertical"></li>
          <li><a href="logout.php"><i class="icon-share-alt"></i> Sair</a></li>
          <li class="divider-vertical"></li>
        </ul>
        <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li><a href="#"><i class="icon-user"></i> Olá: <!--<?php //echo  usuarioLogado() ?>--></a></li>
            <li class="divider-vertical"></li>
        </ul>
      </div>
    </div>
