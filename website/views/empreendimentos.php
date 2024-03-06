<?php
$pagina = "empreendimentos";
include "_inc_headers.php";
?>
<title>Empreendimentos | GPL Incorporadora</title>
</head>

<body id="<?php echo $pagina; ?>">

    <?php
    include "_inc_header.php";
    include "_modal_filtro.php";
    ?>

    <section class="empreendimentos_banner">
        <img src="/website/img/empreendimentos/banner_empreendimentos.png" class="img-banner-empreendimentos" alt="Empreendimentos GPL">
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
                <a href="./empreendimentos">Empreendimentos</a>
            </div>
            <div class="contain-desc">
                <span class="titulo">Empreendimentos</span>
                <span class="desc">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.
                </span>
            </div>
        </div>
    </section>
    <section class="empreendimentos_listagem">
        <div class="container">
            <fieldset class="top-filtros">
                <span class="titulo-listagem">49 empreendimentos</span>
                <div class="contain-btns">
                    <button type="button" class="btn-flt-emp" data-toggle="modal" data-target="#modalFiltro">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <mask id="mask0_344_835" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                    <rect width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M4.16667 16.6667V10.8333H2.5V9.16668H7.5V10.8333H5.83333V16.6667H4.16667ZM4.16667 7.50001V3.33334H5.83333V7.50001H4.16667ZM7.5 7.50001V5.83334H9.16667V3.33334H10.8333V5.83334H12.5V7.50001H7.5ZM9.16667 16.6667V9.16668H10.8333V16.6667H9.16667ZM14.1667 16.6667V14.1667H12.5V12.5H17.5V14.1667H15.8333V16.6667H14.1667ZM14.1667 10.8333V3.33334H15.8333V10.8333H14.1667Z" fill="#1C1B1F" />
                                </g>
                            </svg>
                        </div>
                        <span>Filtrar</span>
                    </button>

                    <div class="dropdown">
                        <button type="button" class="btn-flt-emp" id="drop-filtro-empreendimento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <mask id="mask0_344_845" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="14" height="14">
                                        <rect y="14" width="14" height="14" transform="rotate(-90 0 14)" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M11.0128 4.66667L6.00689 10.5L1.00098 4.66667L1.88953 3.63125L6.00689 8.42917L10.1242 3.63125L11.0128 4.66667Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Mais recentes</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="drop-filtro-empreendimento">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>


                </div>
            </fieldset>
            <div class="lista">
                <div class="card_1" onclick="window.location.href='./empreendimento'">
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
                <div class="card_1" onclick="window.location.href='./empreendimento'">
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
                <div class="card_1" onclick="window.location.href='./empreendimento'">
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
                <div class="card_1" onclick="window.location.href='./empreendimento'">
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
            <div class="contain-carregar-mais">
                <button type="button" class="btn-carregar-mais">Carregar mais</button>
            </div>
        </div>
    </section>
    <?php
    include "_inc_footer.php";
    ?>
</body>

</html>