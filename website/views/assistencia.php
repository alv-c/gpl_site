	<?php
	$pagina = "assistencia";
	include "_inc_headers.php";
	?>
	<title>Assistência Técnica | GPL Incorporadora</title>
	</head>

	<body id="<?php echo $pagina; ?>">

		<?php
		include "_inc_header.php";
		?>

		<section class="assistencia_banner">
			<img src="/website/img/assistencia-tecnica/banner_assistencia.png" class="img-banner-empreendimentos" alt="Empreendimentos GPL">
			<div class="container container-absolute">
				<div class="breadcrumb-banner">
					<a href="./home">Home</a>
					<div class="ico-breadcrumb">
						<svg xmlns="http://www.w3.org/2000/svg" width="10" height="11" viewBox="0 0 10 11" fill="none">
							<mask id="mask0_344_688" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="10" height="11">
								<rect y="0.160553" width="10" height="10" fill="#D9D9D9" />
							</mask>
							<g>
								<path d="M3.34408 9.3272L2.60449 8.58762L6.03158 5.16053L2.60449 1.73345L3.34408 0.993866L7.51074 5.16053L3.34408 9.3272Z" fill="white" />
							</g>
						</svg>
					</div>
					<a href="./empreendimentos">Assistência Técnica</a>
				</div>
				<div class="contain-desc">
					<span class="titulo">Assistência Técnica</span>
					<span class="desc">
						Preencha o formulário que retornaremos o mais breve possível para você!
					</span>
				</div>
			</div>
		</section>
		<section class="assistencia_form">
			<div class="container">
				<div class="contain-assistencia">
					<div class="grid-assistencia">
						<div class="left-assistencia">
							<span class="desc-left">
								FÉRIAS COLETIVAS:COMUNICAMOS QUE ENTRE OS DIAS 20/12/2023 A 01/01/2024 ENTRAREMOS EM RECESSO.SE A SOLICITAÇÃO FOR
								RELACIONADA A VAZAMENTOS (TUBULAÇÃO DE ÁGUA, ESGOTO, GÁS...) ORIENTAMOS O FECHAMENTO DO REGISTRO NO AMBIENTE."
							</span>
						</div>
						<div class="right-assistencia">
							<fieldset>
								<form action="#" method="post">
									<div class="contain-form-inline">
										<div class="min">
											<label for="cpj_cnpj_tipo">CPF / CNPJ</label>
											<select name="cpj_cnpj_tipo" id="cpj_cnpj_tipo" class="form-assistencia" required>
												<option value="cpf" selected>CPF</option>
												<option value="cnpj">CNPJ</option>
											</select>
										</div>
										<div>
											<label for="cpj_cnpj" style="color: transparent !important;">cpf/cnpj</label>
											<input type="text" name="cpj_cnpj" id="cpj_cnpj" class="form-assistencia" required>
										</div>
									</div>
									<div class="contain-form-inline">
										<div>
											<label for="nome">Nome</label>
											<input type="text" name="nome" id="nome" class="form-assistencia" required>
										</div>
										<div>
											<label for="telefone">Telefone</label>
											<input type="text" name="telefone" id="telefone" class="form-assistencia cel_mascara" required>
										</div>
									</div>
									<div class="contain-form-inline">
										<div>
											<label for="email">E-mail</label>
											<input type="email" name="email" id="email" class="form-assistencia" required>
										</div>
										<div>
											<label for="empreendimento">Empreendimento</label>
											<select name="empreendimento" id="empreendimento" class="form-assistencia" required>
												<option hidden>Selecione</option>
												<option value="1">Valor 1</option>
												<option value="2">Valor 2</option>
												<option value="3">Valor 3</option>
											</select>
										</div>
									</div>
									<label for="unidade">Unidade / Área comum</label>
									<select name="unidade" id="unidade" class="form-assistencia" required>
										<option hidden>Selecione</option>
										<option value="1">Valor 1</option>
										<option value="2">Valor 2</option>
										<option value="3">Valor 3</option>
									</select>
									<label for="descricao">Descrição</label>
									<textarea name="descricao" id="descricao" rows="10" class="form-assistencia" required></textarea>
									<label for="anexo">
										<span id="label-anexo">Selecione o anexo</span>
									</label>
									<input type="file" name="anexo" id="anexo">
									<article class="contain-termo">
										<span class="titulo">Termos</span>
										<span class="subtitulo">
											Prezado cliente, é muito importante que antes de abrir a solicitação de Assistência Técnica, 
											SEJA AVALIADO SE O CHAMADO É PROCEDENTE, respondendo aos itens abaixo:
										</span>
										<span class="topico">
											* O serviço solicitado ainda está na garantia? Consultar o manual do proprietário, item Garantia e Atendimento - 
											Garantia legal/Tabela de Garantias.
										</span>
										<span class="topico">
											* As condições de garantia estão sendo cumpridas? Consultar o manual do proprietário, item Garantia e Atendimento - 
											Perda da garantia.
										</span>
										<span class="topico">
											* Foi realizada reforma com alteração do projeto original entregue pela Construtora? Ex.: Troca ou instalação de piso, 
											danos a portas, caixilhos, trilhos de portas de correr causados por reformas, alterações de tubulação hidráulica ou 
											elétrica etc. Qualquer alteração no projeto original caracteriza perda da garantia.
										</span>
										<span class="topico">
											* As Manutenções Preventivas, de Inspeção ou Reformas, foram realizadas por empresas especializadas e foi fornecida a 
											ART (Anotação de Responsabilidade Técnica), conforme disposto no art. 3º da Lei 6.496/77 e na Norma NBR 16280/2014? 
											Caso a empresa contratada cause danos ao apartamento ou ao prédio, a Construtora não será responsável pela correção do dano.
										</span>
										<span class="topico">
											* Caso seja identificado que o CHAMADO NÃO PROCEDE, ou seja, não é de responsabilidade da Construtora, será cobrada 
											uma taxa pela visita técnica e não caberá a construtora a executar os serviços.
										</span>
									</article>
									<div class="contain-check-cont">
										<label for="politica_privacidade">
											Li e aceito os termos definidos acima.*
											<input type="checkbox" name="politica_privacidade" id="politica_privacidade" required>
										</label>
									</div>
									<button type="submit" class="submit-assistencia">Enviar formulário</button>
								</form>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <br><br><br><br><br><br><br><br><br><br><br><br> -->
		<?php include "_inc_footer.php"; ?>
	</body>

	</html>