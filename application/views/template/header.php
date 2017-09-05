<?php  //require_once("function/mostra-alerta.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" type="image/ico" href="<?php base_url(); ?>public/img/mailblue-64.ico" />
	<title>Mensagem de rede</title>

<!-- <script src="public/js/jquery-1.11.1.min.js"></script> -->
<?php echo $js ?>
<!-- <script src="public/js/wysihtml5-0.3.0.js"></script> -->
<script src="<?php echo base_url();?>public/js/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap-datetimepicker.pt-BR.js"></script>

<!--javascript da DataTable-->
<script src="<?php echo base_url();?>public/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>public/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap-select.js"></script>
    <script type="text/javascript">
        $(window).on('load', function () {
            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });
            // $('.selectpicker').selectpicker('hide');
        });
    </script>
	<!--CSS -->
<?php echo link_tag('public/css/bootstrap.min.css');?>
<?php echo link_tag('public/css/DT_bootstrap.css');?>
<?php echo link_tag('public/css/bootstrap-select.css');?>
<?php echo link_tag('public/css/bootstrap-wysihtml5.css');?>
<?php echo link_tag('public/css/prettify.css');?>
<?php echo link_tag('public/css/template.css');?>

</head>

<body>

	<div class="container" style="margin-top: 10px">
		<div class="row">
			<div class="span1">
				<img style="margin-top: 5px" src="<?php echo base_url(); ?>public/img/mailblue-96.png"/>
			</div>
			<div class="span10">
				<h3>Mural de Mensagens</h3>
			</div>
			<div class="span4">
				<img style="margin-left: 6%; margin-bottom: 2%" src="<?php echo base_url('public/img/brasao_sefa_black.png'); ?>" />
			</div>
        </div>

