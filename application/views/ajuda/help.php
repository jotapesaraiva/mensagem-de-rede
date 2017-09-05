<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Cabeçalho -->
<?php
//	include("template/header.php");
//	require_once("function/logica-usuario.php");

//verificaUsuario();
 ?>

<!-- Corpo da Pagina-->
		<div class="row">
			<div class="span12">
			  <h3>Ajuda ao Usuário</h3>

			  <div class="tabbable tabs-left">
				<ul class="nav nav-tabs nav-pills">
				  <li class="active"><a href="#tab1" data-toggle="tab">Ícones do sistema</a></li>
				  <li><a href="#tab2" data-toggle="tab">Status de mensagem</a></li>
				  <li><a href="#tab3" data-toggle="tab">Permissões de usuários</a></li>
				  <li><a href="#tab4" data-toggle="tab">Visualizando solicitação</a></li>
				  <li><a href="#tab5" data-toggle="tab">Solicitação de mensagem</a></li>
				  <li><a href="#tab6" data-toggle="tab">Solicitações pendentes</a></li>
				  <li><a href="#tab7" data-toggle="tab">Requisitos Necessários</a></li>
				  <li><a href="#tab8" data-toggle="tab">Politica de uso</a></li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane fade in active" id="tab1">
						<p><i class="icon-home"></i> <strong>Página Inicial:</strong> responsável pela consulta e exibição das mensagens já postadas no sistema.</p>
						<p><i class="icon-plus"></i> <strong>Adicionar:</strong> responsável pela solicitação de novas mensagens a serem postadas no sistema.</p>
						<p><i class="icon-user"></i> <strong>Usuários:</strong> Exibe o usuário que está logado no sistema.</p>
						<p><i class="icon-question-sign"></i ><strong>Ajuda:</strong> exibe esta página de Ajuda.</p>
						<p><i class="icon-share-alt"></i> <strong>Sair:</strong> desconecta do sistema.</p>

				  </div>
				  <div class="tab-pane fade" id="tab2">
						<p><i class="text-error">Pendente :</i>  indica que a mensagem foi postada no sistema e aguarda por uma análise.</p>
						<p><i class="text-success">Autorizado :</i> indica que a mensagem já foi analisada ou está sendo exibida na rede.</p>
						<p><i class="text-warning">Indeferida :</i> indica que a mensagem foi postada no sistema, mas por alguma razão, a mensagem foi indeferida.</p>
						<p><i class="text-info">Finalizada :</i> indica que a mensagem expirou o tempo de exibição.</p>

				  </div>
				  <div class="tab-pane fade" id="tab3">
						<p><strong>Usuário comum:</strong> pode apenas postar mensagens no sistema e verificar o andamento de suas solicitações.</p>
						<p><strong>Administrador:</strong> responsável por analisar e deferir mensagens previamente postadas no sistema.</p>
						<p><strong>Desenvolvedor:</strong> responsável por gerenciar permissões de usuários, e configurar alguma variável do sistema.</p>

				  </div>
				  <div class="tab-pane fade" id="tab4">
							<p>À partir da página inicial, deve-se clicar no código numérico referente a mensagem que se deseja visualisar.</p>
							<p>E então, uma janela popup exibirá os detalhes da mensagem:</p>
							<ol>
								<li><p>Corpo da mensagem;</p></li>
								<li><p>Observações do solicitante;</p></li>
								<li><p>Considerações referentes à análise;</p></li>
								<li><p>Período de exibição;</p></li>
								<li><p>Destinatário onde será exibida a mensagem;</p></li>
								<li><p>Tipo de forma a mensagem vai ser exibida;</p></li>
								<li><p>Status da solicitação.</p></li>
							</ol>
				  </div>
				  <div class="tab-pane fade" id="tab5">
							<ol>
								<li><p>Clicar no ícone correspondente à <a class="btn"><i class="icon-plus"></i> Adicionar</a></p> no menu.</li>
								<li><p>Preencher o período de inicio e fim que a mensagem deve ser divulgada na rede.</p></li>
								<li><p>Preencher exatamente os campos texto, titulo, mensagem e assinatura, que deve ser exibido.</p></li>
								<li><p>Preencher detalhes sobre a mensagem. Por exemplo:</p></li>
										<pre>Mensagem do tipo PopUp (mensagens exibidas em forma de janela de tempos em tempos);
Mensagem do tipo Login (mensagens exibidas somente quando o usuário logar);
O destinatário onde será exibida a mensagem.</pre>
								<li><p>Verificar os dados preenchidos e clicar em <button class="btn btn-success">Salvar</button>.</p></li></dd>
						</ol>
				  </div>
				  <div class="tab-pane fade" id="tab6">
							<ol>
								<li><p>À partir da página inicial, deve-se clicar no campo pendente referente a mensagem que se deseja visualisar. E então uma janela popup será exibida.</p></li>
								<li><p>Na janela popup, analisar a mensagem do solicitante, preencher o campo "Observação" se cabível, e escolher dentre as opções <button class="btn btn-danger">Indeferir</button>, <button class="btn btn-success">Autorizar</button> ou  em <a class="btn">Voltar</a>.</p></li>
								<li><p>Automaticamente a mensagem passará do status de <b class="text-error">Pendente</b> para <b class="text-success">Autorizada</b> ou <b class="text-warning">Indeferida</b>. E será exibida automanticamente no período indicado.</p></li>
							</ol>
				  </div>
				  <div class="tab-pane fade" id="tab7">
								<p>Para que a mensagem possa ser visualizada de forma correta é necessário os seguintes requisitos:</p>
							<ol>
								<li><p>Navegador Internet Explorer 9 ou superior.</p></li>
								<li><p>Ter adicionando o proxy no navegador em Feramentas, Opções da Internet, Conexões, configurações da LAN.</p></li>
								<li><p>Na janela que se abrir clicar no checkbox "Usar um servidor proxy para a rede local(estas configurações não se aplicam a conexões discadas ou VPN)."</p></li>
								<li><p>No Endereço adicionar o IP: 10.3.1.22 e a Porta: 80.</p></li>
								<li><p>Clicar em avançadas e adicinonar em exceções o seguinte endereço: *.sefa.pa.gov.br. Caso já tenha algum antes incluir ";" na frente.</p></li>
								<li><p>Clicar em Ok  em configurações de proxy e configuração da Rede Local (LAN).</p></li>
								<li><p>Na Aba segurança, selecionar a opção Sites confiáveis e clicar em sites</p></li>
								<li><p>Na janela que se abre adicionar o seguinte endereço: https://operacao.sefa.pa.gov.br e clicar em adicionar e fechar</p></li>
								<li><p>Ao Final de tudo clicar em Ok</p></li>
							</ol>
				  </div>
				  <div class="tab-pane fade" id="tab8">
							<p>A definir pelos coordenadores.</p>
				  </div>

				</div>
			  </div><!--fim das abas-->

			</div>
         </div>
<!-- RODAPE -->
<?php //include("template/footer.html"); ?>
