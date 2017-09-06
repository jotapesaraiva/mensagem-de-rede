<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" type="image/ico" href="<?php base_url(); ?>public/img/mailblue-64.ico" />
	<title>Mensagem de rede</title>
    <!--JS -->
<?php echo $js; ?>

    <script type="text/javascript">
        $(window).on('load', function () {
            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });
            // $('.selectpicker').selectpicker('hide');
        });
    </script>
	<!--CSS -->
<?php echo $css; ?>

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

