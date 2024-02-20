	<?php
	$pagina = "home";
	include "_inc_headers.php";
	?>
	<title>Home</title>
	</head>

	<body id="<?php echo $pagina; ?>">

		<?php include "_inc_header.php"; ?>
		<?php include "_modal_video.php"; ?>

		<section class="home-banner">
			<div class="owl-carousel owl-theme" id="owl-carousel-1">
				<div class="item">
					<img src="website/img/home/banner-home.png">
					<div class="contain-item">
						<span class="bairro">St. Universitário</span>
						<span class="titulo">Alma Home Senses</span>
						<span class="desc">Feito para quem busca bem-estar, exclusividade e alma leve.</span>
						<div class="contain-btn">
							<a href="#" class="action-banner">
								<div class="ico">
									<svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
										<circle cx="14.5" cy="15" r="14" fill="white" stroke="#B1B1B1" />
										<mask id="mask0_356_893" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="12">
											<rect x="9.52539" y="9" width="12" height="12" fill="#D9D9D9" />
										</mask>
										<g>
											<path d="M13.5379 20L12.6504 19.1125L16.7629 15L12.6504 10.8875L13.5379 9.99997L18.5379 15L13.5379 20Z" fill="#5C8262" />
										</g>
									</svg>
								</div>
								<span>saiba mais</span>
							</a>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="website/img/home/banner-home.png">
					<div class="contain-item">
						<span class="bairro">St. Universitário</span>
						<span class="titulo">Alma Home Senses</span>
						<span class="desc">Feito para quem busca bem-estar, exclusividade e alma leve.</span>
						<div class="contain-btn">
							<a href="#" class="action-banner">
								<div class="ico">
									<svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
										<circle cx="14.5" cy="15" r="14" fill="white" stroke="#B1B1B1" />
										<mask id="mask0_356_893" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="12">
											<rect x="9.52539" y="9" width="12" height="12" fill="#D9D9D9" />
										</mask>
										<g>
											<path d="M13.5379 20L12.6504 19.1125L16.7629 15L12.6504 10.8875L13.5379 9.99997L18.5379 15L13.5379 20Z" fill="#5C8262" />
										</g>
									</svg>
								</div>
								<span>saiba mais</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="home-institucional">
			<div class="container-full-left">
				<div class="grid">
					<div class="grid-left">

						<div class="contain-subtitulo">
							<div class="ico">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="36" viewBox="0 0 32 36" fill="none">
									<path d="M0 7.94122L25.7195 35.5898V7.94122H0Z" fill="#BAC3B0" />
									<path d="M5.45996 0L31.1795 27.6486V0H5.45996Z" fill="#425545" />
								</svg>
							</div>
							<span class="subtitulo">Viver é <span class="destaque">essencial</span></span>
						</div>
						<span class="titulo">
							Compromisso com a satisfação <span class="destaque">dos nossos clientes.</span>
						</span>
						<span class="desc">
							Empresa genuinamente goiana, a GPL Incorporadora atua <span class="destaque">há 31 anos em nossa cidade.</span>
							Temos o alto padrão construtivo e o conceito de nossos produtos como prioridade.
							Treinamos nossos colaboradores para proporcionarem uma experiência de excelência aos
							nossos clientes, pois nosso objetivo é ajudá-los a realizar sonhos.
						</span>
						<div class="contain-btn">
							<a href="#">Saiba mais</a>
						</div>
					</div>
					<div class="grid-right">
						<button class="btn btn-default btn-lg video-modal" data-video="https://www.youtube.com/watch?v=RqlvAIlAwmw&t=7s" data-toggle="modal" data-target="#videoModal">
							<img src="website/img/home/action_video_home.png">
						</button>
					</div>
				</div>
			</div>
		</section>
		<section class="home-empreendimentos">
			<div class="container">
				<div class="top">
					<span class="titulo">Empreendimentos</span>
					<div class="contain-btns">
						<button type="button">
							<div class="ico">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
									<circle cx="15" cy="14.5" r="14" fill="white" stroke="#B1B1B1" />
									<mask id="mask0_46_1019" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="8" width="13" height="13">
										<rect x="10.0254" y="8.5" width="12" height="12" fill="#D9D9D9" />
									</mask>
									<g>
										<path d="M14.0379 19.5L13.1504 18.6125L17.2629 14.5L13.1504 10.3875L14.0379 9.5L19.0379 14.5L14.0379 19.5Z" fill="#5C8262" />
									</g>
								</svg>
							</div>
							<span>Filtrar</span>
						</button>
						<button type="button">
							<div class="ico">
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="29" viewBox="0 0 30 29" fill="none">
									<circle cx="15" cy="14.5" r="14" fill="white" stroke="#B1B1B1" />
									<mask id="mask0_46_1019" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="10" y="8" width="13" height="13">
										<rect x="10.0254" y="8.5" width="12" height="12" fill="#D9D9D9" />
									</mask>
									<g>
										<path d="M14.0379 19.5L13.1504 18.6125L17.2629 14.5L13.1504 10.3875L14.0379 9.5L19.0379 14.5L14.0379 19.5Z" fill="#5C8262" />
									</g>
								</svg>
							</div>
							<span>Ver todos</span>
						</button>
					</div>
				</div>
			</div>
			<div class="owl-carousel owl-theme" id="owl-carousel-2">
				<div class="item">
					<div class="card-home-inst" onclick="window.location.href='https://www.google.com'">
						<img src="/website/img/home/img-exe-card.png" alt="Imóvel GPL">
						<div class="contain-card">
							<div class="top-c-card">
								<span class="entrega">Breve lançamento</span>
								<span class="bairro">Setor Oeste</span>
							</div>
							<div class="bottom-c-card">
								<span class="titulo">Condomínio Cancún</span>
								<span class="desc">2 Qtos com suíte | 52m²</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card-home-inst" onclick="window.location.href='https://www.google.com'">
						<img src="/website/img/home/img-exe-card.png" alt="Imóvel GPL">
						<div class="contain-card">
							<div class="top-c-card">
								<span class="entrega">Breve lançamento</span>
								<span class="bairro">Setor Oeste</span>
							</div>
							<div class="bottom-c-card">
								<span class="titulo">Condomínio Cancún</span>
								<span class="desc">2 Qtos com suíte | 52m²</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="home-arena">
			<div class="container">
				<div class="grid-arena">
					<div class="left">
						<div class="contain-img">
							<img src="website/img/home/arena-banner.png" class="banner-arena">
						</div>
					</div>
					<div class="right">
						<span class="subtitulo">Arena GPL</span>
						<span class="titulo">O futuro está apenas começando</span>
						<span class="desc">
							Um espaço para receber e compartilhar experiências imersivas com salas interativas, salas de reunião, produção de conteúdo, eventos, coworking e muito mais.
						</span>
						<div class="contain-btn">
							<a href="#" class="saiba-mais">Saiba mais</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="home-acontece">
			<div class="container">
				<span class="titulo">GPL Acontece</span>
				<div class="grid-acontece">
					<div class="item">
						<div class="card-acontece">
							<div class="top-img">
								<img src="website/img/home/img-card-acontece.png">
							</div>
							<div class="body-card">
								<span class="categoria">Categoria</span>
								<span class="titulo-card">Sustentabilidade que a gente só vê aqui na GPL</span>
								<div class="contain-btn">
									<a href="#">
										<span>Leia mais</span>
										<div class="ico">
											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
												<mask id="mask0_94_69" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="19" height="19">
													<rect x="18.1035" y="0.791992" width="17.8706" height="17.8706" transform="rotate(90 18.1035 0.791992)" fill="#D9D9D9" />
												</mask>
												<g>
													<path d="M4.70095 13.897L11.8492 6.74874L5.44556 6.74874L5.44556 5.25952L14.3809 5.25952L14.3809 14.1948L12.8916 14.1948L12.8916 7.79119L5.7434 14.9394L4.70095 13.897Z" fill="#425545" />
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card-acontece">
							<div class="top-img">
								<img src="website/img/home/img-card-acontece.png">
							</div>
							<div class="body-card">
								<span class="categoria">Categoria</span>
								<span class="titulo-card">Sustentabilidade que a gente só vê aqui na GPL</span>
								<div class="contain-btn">
									<a href="#">
										<span>Leia mais</span>
										<div class="ico">
											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
												<mask id="mask0_94_69" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="19" height="19">
													<rect x="18.1035" y="0.791992" width="17.8706" height="17.8706" transform="rotate(90 18.1035 0.791992)" fill="#D9D9D9" />
												</mask>
												<g>
													<path d="M4.70095 13.897L11.8492 6.74874L5.44556 6.74874L5.44556 5.25952L14.3809 5.25952L14.3809 14.1948L12.8916 14.1948L12.8916 7.79119L5.7434 14.9394L4.70095 13.897Z" fill="#425545" />
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card-acontece">
							<div class="top-img">
								<img src="website/img/home/img-card-acontece.png">
							</div>
							<div class="body-card">
								<span class="categoria">Categoria</span>
								<span class="titulo-card">Sustentabilidade que a gente só vê aqui na GPL</span>
								<div class="contain-btn">
									<a href="#">
										<span>Leia mais</span>
										<div class="ico">
											<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
												<mask id="mask0_94_69" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="19" height="19">
													<rect x="18.1035" y="0.791992" width="17.8706" height="17.8706" transform="rotate(90 18.1035 0.791992)" fill="#D9D9D9" />
												</mask>
												<g>
													<path d="M4.70095 13.897L11.8492 6.74874L5.44556 6.74874L5.44556 5.25952L14.3809 5.25952L14.3809 14.1948L12.8916 14.1948L12.8916 7.79119L5.7434 14.9394L4.70095 13.897Z" fill="#425545" />
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contain-ver-todos">
					<a href="" class="ver-todos">
						<div class="ico">
							<svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
								<circle cx="14.5" cy="14.5786" r="14" fill="white" stroke="#B1B1B1" />
								<mask id="mask0_75_950" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="8" width="13" height="13">
									<rect x="9.52539" y="8.57861" width="12" height="12" fill="#D9D9D9" />
								</mask>
								<g>
									<path d="M13.5379 19.5786L12.6504 18.6911L16.7629 14.5786L12.6504 10.4661L13.5379 9.57861L18.5379 14.5786L13.5379 19.5786Z" fill="#5C8262" />
								</g>
							</svg>
						</div>
						<span>ver todas</span>
					</a>
				</div>
			</div>
		</section>
		<?php include "_inc_footer.php"; ?>
	</body>

	</html>