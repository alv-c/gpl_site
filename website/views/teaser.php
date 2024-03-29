<?php
$pagina = "teaser";
include "_inc_headers.php";
?>
<title>Empreendimento | GPL Incorporadora</title>
</head>

<body id="<?php echo $pagina; ?>">

    <?php
    include "_inc_header_empreendimento.php";
    include "_modal_video.php";
    ?>

    <section class="teaser_banner">
        <img src="/website/img/teaser/teaser_banner.png" class="img-banner-empreendimentos" alt="Empreendimentos GPL">
        <div class="container-full-right">
            <div class="contain-desc">
                <div class="grid-empreendimento-topo">
                    <div class="left-topo">
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
                            <a href="./empreendimentos"><strong>Alma Home Senses</strong></a>
                        </div>
                        <div class="contain-left">
                            <div class="contain-titulo">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="26" viewBox="0 0 25 26" fill="none">
                                        <path d="M0.910156 0.19857L24.7266 25.8014V0.19857H0.910156Z" fill="white" />
                                    </svg>
                                </div>
                                <span>Seu mundo, vários destinos</span>
                            </div>
                        </div>
                    </div>
                    <div class="right-topo">
                        <fieldset id="containFormTopo">
                            <span class="titulo-form">Cadastre-se para saber mais desse empreendimento:</span>
                            <form action="#" method="post">
                                <input type="text" name="nome" class="form-cont-emp" placeholder="Seu nome" required>
                                <input type="text" name="telefone" class="form-cont-emp cel_mascara" placeholder="Seu telefone" required>
                                <input type="email" name="email" class="form-cont-emp" placeholder="Seu e-mail" required>
                                <div class="contain-check-cont">
                                    <label for="politica_privacidade">
                                        Aceito receber WhatsApp e outros contatos da GPL Incorporadora de acordo com a <a href="#">Política de Privacidade.</a>
                                        <input type="checkbox" name="politica_privacidade" id="politica_privacidade" required>
                                    </label>
                                </div>
                                <div class="contain-btn-form">
                                    <button type="submit" class="submit-form">
                                        <div class="ico">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                <circle cx="14.8418" cy="14.6036" r="14" fill="white" stroke="#B1B1B1" />
                                                <mask id="mask0_306_674" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="8" width="13" height="13">
                                                    <rect x="9.86719" y="8.60361" width="12" height="12" fill="#D9D9D9" />
                                                </mask>
                                                <g>
                                                    <path d="M13.8797 19.6036L12.9922 18.7161L17.1047 14.6036L12.9922 10.4911L13.8797 9.60358L18.8797 14.6036L13.8797 19.6036Z" fill="#5C8262" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span>Enviar</span>
                                    </button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="empreendimento_lancamento_desc">
        <div class="container">
            <div class="info">
                <div class="item">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <mask id="mask0_368_1032" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                <rect y="0.350708" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M12 12.3507C12.55 12.3507 13.0208 12.1549 13.4125 11.7632C13.8042 11.3715 14 10.9007 14 10.3507C14 9.80071 13.8042 9.32987 13.4125 8.93821C13.0208 8.54654 12.55 8.35071 12 8.35071C11.45 8.35071 10.9792 8.54654 10.5875 8.93821C10.1958 9.32987 10 9.80071 10 10.3507C10 10.9007 10.1958 11.3715 10.5875 11.7632C10.9792 12.1549 11.45 12.3507 12 12.3507ZM12 19.7007C14.0333 17.834 15.5417 16.1382 16.525 14.6132C17.5083 13.0882 18 11.734 18 10.5507C18 8.73404 17.4208 7.24654 16.2625 6.08821C15.1042 4.92987 13.6833 4.35071 12 4.35071C10.3167 4.35071 8.89583 4.92987 7.7375 6.08821C6.57917 7.24654 6 8.73404 6 10.5507C6 11.734 6.49167 13.0882 7.475 14.6132C8.45833 16.1382 9.96667 17.834 12 19.7007ZM12 22.3507C9.31667 20.0674 7.3125 17.9465 5.9875 15.9882C4.6625 14.0299 4 12.2174 4 10.5507C4 8.05071 4.80417 6.05904 6.4125 4.57571C8.02083 3.09237 9.88333 2.35071 12 2.35071C14.1167 2.35071 15.9792 3.09237 17.5875 4.57571C19.1958 6.05904 20 8.05071 20 10.5507C20 12.2174 19.3375 14.0299 18.0125 15.9882C16.6875 17.9465 14.6833 20.0674 12 22.3507Z" fill="#BAC3B0" />
                            </g>
                        </svg>
                    </div>
                    <span>Setor Nova Suiça</span>
                </div>
                <div class="item">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <mask id="mask0_368_1037" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                <rect y="0.350708" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M2 19.3507V13.3507C2 12.9007 2.09167 12.4924 2.275 12.1257C2.45833 11.759 2.7 11.434 3 11.1507V8.35071C3 7.51737 3.29167 6.80904 3.875 6.22571C4.45833 5.64237 5.16667 5.35071 6 5.35071H10C10.3833 5.35071 10.7417 5.42154 11.075 5.56321C11.4083 5.70487 11.7167 5.90071 12 6.15071C12.2833 5.90071 12.5917 5.70487 12.925 5.56321C13.2583 5.42154 13.6167 5.35071 14 5.35071H18C18.8333 5.35071 19.5417 5.64237 20.125 6.22571C20.7083 6.80904 21 7.51737 21 8.35071V11.1507C21.3 11.434 21.5417 11.759 21.725 12.1257C21.9083 12.4924 22 12.9007 22 13.3507V19.3507H20V17.3507H4V19.3507H2ZM13 10.3507H19V8.35071C19 8.06737 18.9042 7.82987 18.7125 7.63821C18.5208 7.44654 18.2833 7.35071 18 7.35071H14C13.7167 7.35071 13.4792 7.44654 13.2875 7.63821C13.0958 7.82987 13 8.06737 13 8.35071V10.3507ZM5 10.3507H11V8.35071C11 8.06737 10.9042 7.82987 10.7125 7.63821C10.5208 7.44654 10.2833 7.35071 10 7.35071H6C5.71667 7.35071 5.47917 7.44654 5.2875 7.63821C5.09583 7.82987 5 8.06737 5 8.35071V10.3507ZM4 15.3507H20V13.3507C20 13.0674 19.9042 12.8299 19.7125 12.6382C19.5208 12.4465 19.2833 12.3507 19 12.3507H5C4.71667 12.3507 4.47917 12.4465 4.2875 12.6382C4.09583 12.8299 4 13.0674 4 13.3507V15.3507Z" fill="#BAC3B0" />
                            </g>
                        </svg>
                    </div>
                    <span>2 e 3 quartos</span>
                </div>
                <div class="item">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <mask id="mask0_368_1042" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                <rect y="0.350708" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M4 18.3507C3.45 18.3507 2.97917 18.1549 2.5875 17.7632C2.19583 17.3715 2 16.9007 2 16.3507V8.35071C2 7.80071 2.19583 7.32987 2.5875 6.93821C2.97917 6.54654 3.45 6.35071 4 6.35071H20C20.55 6.35071 21.0208 6.54654 21.4125 6.93821C21.8042 7.32987 22 7.80071 22 8.35071V16.3507C22 16.9007 21.8042 17.3715 21.4125 17.7632C21.0208 18.1549 20.55 18.3507 20 18.3507H4ZM4 16.3507H20V8.35071H17V12.3507H15V8.35071H13V12.3507H11V8.35071H9V12.3507H7V8.35071H4V16.3507Z" fill="#BAC3B0" />
                            </g>
                        </svg>
                    </div>
                    <span>62 a 112m2</span>
                </div>
            </div>
        </div>
    </section>
    <section class="empreendimento_lancamento_info">
        <div class="container">
            <div class="grid-empreendimento-info">
                <div class="left-info">
                    <img src="/website/img/teaser/info-empreendimento.png">
                </div>
                <div class="right-info">
                    <span class="subtitulo">Lançamento</span>
                    <span class="titulo">
                        Um projeto sensorial, feito para quem busca
                        <strong>bem-estar, exclusividade e Alma leve.</strong>
                    </span>
                    <span class="desc">
                        Ambientes desenvolvidos para transformar o morar em um estado profundo de
                        experiência de vida. Criando espaços de pensamento positivo, reduzindo o
                        estresse e estimulando o autocuidado.Ambientes desenvolvidos para transformar
                        o morar em um estado profundo de experiência de vida. Criando espaços de
                        pensamento positivo, reduzindo o estresse e estimulando o autocuidado.
                        Ambientes desenvolvidos para transformar o morar em um estado profundo de
                        experiência de vida.
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="empreendimento-media">
        <div class="container">
            <button class="video-modal" data-video="https://www.youtube.com/watch?v=RqlvAIlAwmw&t=7s" data-toggle="modal" data-target="#videoModal">
                <img src="/website/img/teaser/banner_media_empreendimento.png">
            </button>
        </div>
    </section>
    <section class="empreendimento-diferenciais">
        <div class="container">
            <span class="titulo-diferenciais">Diferenciais</span>
            <article class="sanfona">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne_1">
                            <button class="btn-open-sanf" data-toggle="collapse" data-target="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                Collapsible Group Item #1
                            </button>
                        </div>
                        <div id="collapseOne_1" class="collapse show" aria-labelledby="headingOne_1" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo_2">
                            <button class="btn-open-sanf collapsed" data-toggle="collapse" data-target="#collapseTwo_2" aria-expanded="false" aria-controls="collapseTwo_2">
                                Collapsible Group Item #2
                            </button>
                        </div>
                        <div id="collapseTwo_2" class="collapse" aria-labelledby="headingTwo_2" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree_3">
                            <button class="btn-open-sanf collapsed" data-toggle="collapse" data-target="#collapseThree_3" aria-expanded="false" aria-controls="collapseThree_3">
                                Collapsible Group Item #3
                            </button>
                        </div>
                        <div id="collapseThree_3" class="collapse" aria-labelledby="headingThree_3" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="teaser-flyer">
        <div class="container">
            <img src="/website/img/teaser/teaser-flyer.png" class="flyer">
            <div class="contain-btn-flyer">
                <a href="#" class="interesse-flyer">Tenho interesse</a>
            </div>
        </div>
    </section>
    <?php include "_inc_footer_empreendimento.php";
    ?>
</body>

</html>