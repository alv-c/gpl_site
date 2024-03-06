<?php
$pagina = "empreendimento";
include "_inc_headers.php";
?>
<title>Empreendimento | GPL Incorporadora</title>
</head>

<body id="<?php echo $pagina; ?>">

    <?php
    include "_inc_header_empreendimento.php";
    include "_modal_video.php";
    ?>

    <section class="empreendimento_banner">
        <img src="/website/img/empreendimento/empreendimento_banner.png" class="img-banner-empreendimentos" alt="Empreendimentos GPL">
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
                                <span>Alma Home Senses</span>
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
    <section class="empreendimento-navegacao">
        <nav class="nav-empreendimento">
            <div class="container">
                <button type="button" onclick="redirect('empreendimento_lancamento_desc')" data-animation="empreendimento_lancamento_desc" class="btn-filter-top">Sobre</button>
                <button type="button" onclick="redirect('empreendimento-diferenciais')" data-animation="empreendimento-diferenciais" class="btn-filter-top">Diferenciais</button>
                <button type="button" onclick="redirect('empreendimento-galeria')" data-animation="empreendimento-galeria" class="btn-filter-top">Galeria</button>
                <button type="button" onclick="redirect('empreendimento-localizacao')" data-animation="empreendimento-localizacao" class="btn-filter-top">Localização</button>
                <button type="button" onclick="redirect('empreendimento-estagio-obra')" data-animation="empreendimento-estagio-obra" class="btn-filter-top">Estágio da obra</button>
                <button type="button" data-animation="sessao-2" class="btn-filter-top">Indique um amigo</button>
                <button type="button" data-animation="empreendimento_banner" class="btn-filter-top">Agende uma visita</button>
            </div>
        </nav>
    </section>
    <section class="empreendimento_lancamento_desc" id="empreendimento_lancamento_desc">
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
                <div class="item">
                    <div class="ico">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <mask id="mask0_306_720" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                <rect y="0.861938" width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g>
                                <path d="M6 19.8619V20.8619C6 21.1453 5.90417 21.3828 5.7125 21.5744C5.52083 21.7661 5.28333 21.8619 5 21.8619H4C3.71667 21.8619 3.47917 21.7661 3.2875 21.5744C3.09583 21.3828 3 21.1453 3 20.8619V12.8619L5.1 6.86194C5.2 6.56194 5.37917 6.32027 5.6375 6.13694C5.89583 5.95361 6.18333 5.86194 6.5 5.86194H17.5C17.8167 5.86194 18.1042 5.95361 18.3625 6.13694C18.6208 6.32027 18.8 6.56194 18.9 6.86194L21 12.8619V20.8619C21 21.1453 20.9042 21.3828 20.7125 21.5744C20.5208 21.7661 20.2833 21.8619 20 21.8619H19C18.7167 21.8619 18.4792 21.7661 18.2875 21.5744C18.0958 21.3828 18 21.1453 18 20.8619V19.8619H6ZM5.8 10.8619H18.2L17.15 7.86194H6.85L5.8 10.8619ZM7.5 16.8619C7.91667 16.8619 8.27083 16.7161 8.5625 16.4244C8.85417 16.1328 9 15.7786 9 15.3619C9 14.9453 8.85417 14.5911 8.5625 14.2994C8.27083 14.0078 7.91667 13.8619 7.5 13.8619C7.08333 13.8619 6.72917 14.0078 6.4375 14.2994C6.14583 14.5911 6 14.9453 6 15.3619C6 15.7786 6.14583 16.1328 6.4375 16.4244C6.72917 16.7161 7.08333 16.8619 7.5 16.8619ZM16.5 16.8619C16.9167 16.8619 17.2708 16.7161 17.5625 16.4244C17.8542 16.1328 18 15.7786 18 15.3619C18 14.9453 17.8542 14.5911 17.5625 14.2994C17.2708 14.0078 16.9167 13.8619 16.5 13.8619C16.0833 13.8619 15.7292 14.0078 15.4375 14.2994C15.1458 14.5911 15 14.9453 15 15.3619C15 15.7786 15.1458 16.1328 15.4375 16.4244C15.7292 16.7161 16.0833 16.8619 16.5 16.8619ZM5 17.8619H19V12.8619H5V17.8619Z" fill="#BAC3B0" />
                            </g>
                        </svg>
                    </div>
                    <span>3 e 4 vagas</span>
                </div>
            </div>
        </div>
    </section>
    <section class="empreendimento_lancamento_info" id="empreendimento_lancamento_info">
        <div class="container">
            <div class="grid-empreendimento-info">
                <div class="left-info">
                    <img src="/website/img/teaser/info-empreendimento.png">
                    <div class="contain-anco">
                        <a href="" class="ancor-info" target="_blank">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <mask id="mask0_387_1642" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                                        <rect width="22" height="22" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M8.03778 17.7515L7.07178 16.7855L8.85224 14.9769C6.98482 14.7289 5.42443 14.2397 4.17108 13.5093C2.9177 12.7789 2.29102 11.9425 2.29102 11C2.29102 9.87295 3.13217 8.9037 4.81448 8.09222C6.4968 7.28074 8.55841 6.875 10.9993 6.875C13.4402 6.875 15.5019 7.28074 17.1842 8.09222C18.8665 8.9037 19.7076 9.87295 19.7076 11C19.7076 11.8062 19.2452 12.5454 18.3203 13.2176C17.3954 13.8898 16.1773 14.3975 14.666 14.7406V13.3375C15.8424 13.0319 16.7476 12.6538 17.3816 12.2031C18.0156 11.7524 18.3327 11.3514 18.3327 11C18.3327 10.4935 17.6795 9.90849 16.3733 9.24509C15.067 8.58168 13.2757 8.24998 10.9993 8.24998C8.72294 8.24998 6.93162 8.58168 5.62537 9.24509C4.31912 9.90849 3.66599 10.4935 3.66599 11C3.66599 11.4019 4.11434 11.8661 5.01104 12.3926C5.90774 12.9191 7.10352 13.3034 8.59839 13.5455L7.07178 12.0189L8.03778 11.0529L11.3871 14.4022L8.03778 17.7515Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>Tour virtual</span>
                        </a>
                        <a href="" class="ancor-info" target="_blank">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                    <mask id="mask0_387_1647" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="23">
                                        <rect y="0.5" width="22" height="22" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M6.64518 15.8541H15.3535V14.4792H6.64518V15.8541ZM10.9993 13.016L14.3487 9.66667L13.3827 8.70066L11.6868 10.3683V6.22919H10.3118V10.3683L8.61599 8.70066L7.64999 9.66667L10.9993 13.016ZM11.0009 20.2083C9.79642 20.2083 8.66431 19.9798 7.60452 19.5226C6.54472 19.0655 5.62284 18.4452 4.83889 17.6616C4.05493 16.878 3.43429 15.9565 2.97698 14.8972C2.51967 13.8378 2.29102 12.706 2.29102 11.5015C2.29102 10.2971 2.51957 9.16498 2.97668 8.10519C3.43379 7.04539 4.05415 6.12351 4.83774 5.33956C5.62136 4.5556 6.54283 3.93496 7.60216 3.47765C8.66147 3.02034 9.79335 2.79169 10.9978 2.79169C12.2022 2.79169 13.3343 3.02024 14.3941 3.47735C15.4539 3.93447 16.3758 4.55482 17.1598 5.33842C17.9437 6.12203 18.5644 7.0435 19.0217 8.10283C19.479 9.16215 19.7076 10.294 19.7076 11.4985C19.7076 12.7029 19.4791 13.835 19.022 14.8948C18.5649 15.9546 17.9445 16.8765 17.1609 17.6604C16.3773 18.4444 15.4558 19.065 14.3965 19.5223C13.3372 19.9797 12.2053 20.2083 11.0009 20.2083ZM10.9993 18.8333C13.0465 18.8333 14.7806 18.1229 16.2014 16.7021C17.6222 15.2812 18.3327 13.5472 18.3327 11.5C18.3327 9.45278 17.6222 7.71875 16.2014 6.29791C14.7806 4.87708 13.0465 4.16666 10.9993 4.16666C8.9521 4.16666 7.21808 4.87708 5.79724 6.29791C4.37641 7.71875 3.66599 9.45278 3.66599 11.5C3.66599 13.5472 4.37641 15.2812 5.79724 16.7021C7.21808 18.1229 8.9521 18.8333 10.9993 18.8333Z" fill="#1C1B1F" />
                                    </g>
                                </svg>
                            </div>
                            <span>memorial descritivo</span>
                        </a>
                    </div>
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
    <section class="empreendimento-media" id="empreendimento-media">
        <div class="container">
            <button class="video-modal" data-video="https://www.youtube.com/watch?v=RqlvAIlAwmw&t=7s" data-toggle="modal" data-target="#videoModal">
                <img src="/website/img/teaser/banner_media_empreendimento.png">
            </button>
        </div>
    </section>
    <section class="empreendimento-diferenciais" id="empreendimento-diferenciais">
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
    <section class="empreendimento-galeria" id="empreendimento-galeria">
        <div class="container">
            <span class="titulo-galeria">Galeria de imagens</span>
        </div>
        <div class="container-full contain-nav">
            <div class="container">
                <nav class="owl-filter-bar">
                    <!-- <button type="button" class="item active" data-owl-filter="*">All</button> -->
                    <button type="button" class="item active" data-owl-filter=".fachada">Fachada</button>
                    <button type="button" class="item" data-owl-filter=".apartamento">Apartamento</button>
                </nav>
            </div>
        </div>
        <div class="container-full">
            <div class="owl-carousel owl-theme" id="owl-carousel-galeria">
                <div class="item fachada">
                    <a href="/website/img/empreendimento/galeria-1.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-1.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item fachada">
                    <a href="/website/img/empreendimento/galeria-2.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-2.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item apartamento">
                    <a href="/website/img/empreendimento/galeria-3.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-3.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item fachada">
                    <a href="/website/img/empreendimento/galeria-2.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-2.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item apartamento">
                    <a href="/website/img/empreendimento/galeria-3.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-3.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item apartamento">
                    <a href="/website/img/empreendimento/galeria-2.png" class="ancor-item-gall" data-lightbox="gallery">
                        <img src="/website/img/empreendimento/galeria-2.png" class="img-item-gall" alt="">
                        <div class="contain-item-bottom">
                            <span>Acesso</span>
                            <div class="btn-contain">
                                <div class="ico">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <circle cx="14.5351" cy="15.3962" r="14" fill="white" stroke="#B1B1B1" />
                                        <mask id="mask0_306_767" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="13">
                                            <rect x="9.56055" y="9.39624" width="12" height="12" fill="#D9D9D9" />
                                        </mask>
                                        <g>
                                            <path d="M13.573 20.3962L12.6855 19.5087L16.798 15.3962L12.6855 11.2837L13.573 10.3962L18.573 15.3962L13.573 20.3962Z" fill="#5C8262" />
                                        </g>
                                    </svg>
                                </div>
                                <span>Ver galeria</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="slider_nav">
                <button class="am-next">
                    <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7978 0.658776L17.2754 3.13638L5.79466 14.6171L17.2754 26.0978L14.7978 28.5754L0.839452 14.6171L14.7978 0.658776Z" fill="white" />
                    </svg>
                </button>
                <button class="am-prev">
                    <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.20221 28.5754L0.724609 26.0978L12.2053 14.617L0.724609 3.1363L3.20221 0.658691L17.1605 14.617L3.20221 28.5754Z" fill="white" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="container">
            <div class="contain-btn">
                <a href="#" class="interesse">Tenho interesse</a>
            </div>
        </div>
    </section>
    <section class="empreendimento-localizacao" id="empreendimento-localizacao">
        <div class="container">
            <div class="contain-titulo-loc">
                <span class="titulo-loc">Localização</span>
                <div class="contain-btns-loc">
                    <button type="button" class="filtro-mapa active" data-lat="-16.70462320664015" data-long="-49.26433650500866">Empreendimento</button>
                    <button type="button" class="filtro-mapa" data-lat="-16.737587439106694" data-long="-49.205252531695805">Stand</button>
                    <div class="contain-btn-rota">
                        <a href="https://maps.app.goo.gl/KwoZ57XFUZcAqTkk7" class="btn-rota" target="_blank">
                            <div class="ico">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                    <circle cx="14.5" cy="15" r="14" fill="white" stroke="#B1B1B1" />
                                    <mask id="mask0_306_895" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="12">
                                        <rect x="9.52539" y="9" width="12" height="12" fill="#D9D9D9" />
                                    </mask>
                                    <g>
                                        <path d="M13.5379 20L12.6504 19.1125L16.7629 15L12.6504 10.8875L13.5379 10L18.5379 15L13.5379 20Z" fill="#5C8262" />
                                    </g>
                                </svg>
                            </div>
                            <span>Fazer rota</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full dual-color">
            <div class="container">
                <div class="content-map">
                    <div id="mapa"></div>
                </div>
                <span class="endereco-loc">R. 22, 97 - St. Oeste, Goiânia - GO, 74120-130</span>
                <div class="contain-rota-mobille">
                    <a href="https://maps.app.goo.gl/KwoZ57XFUZcAqTkk7" class="btn-rota" target="_blank">
                        <div class="ico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                <circle cx="14.5" cy="15" r="14" fill="white" stroke="#B1B1B1" />
                                <mask id="mask0_306_895" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="9" width="13" height="12">
                                    <rect x="9.52539" y="9" width="12" height="12" fill="#D9D9D9" />
                                </mask>
                                <g>
                                    <path d="M13.5379 20L12.6504 19.1125L16.7629 15L12.6504 10.8875L13.5379 10L18.5379 15L13.5379 20Z" fill="#5C8262" />
                                </g>
                            </svg>
                        </div>
                        <span>Fazer rota</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="empreendimento-estagio-obra" id="empreendimento-estagio-obra">
        <div class="container">
            <span class="titulo-estagio">Estágio da obra</span>
            <div class="grid-filtro-estagio">
                <div class="left-filtro-estagio">
                    <select id="filtro_data_estagio" name="filtro_data_estagio">
                        <option value=".outubro_2022">Outubro 2022</option>
                        <option value=".setembro_2022">Setembro 2022</option>
                        <option value=".agosto_2022">Agosto 2022</option>
                    </select>
                </div>
                <div class="right-filtro-estagio">
                    <label for="tipo_midia_foto" class="label-filtro-estagio">
                        Fotos
                        <input type="radio" class="input-filtro-estagio" name="tipo_midia" id="tipo_midia_foto" value=".foto" checked>
                    </label>
                    <label for="tipo_midia_video" class="label-filtro-estagio">
                        Videos
                        <input type="radio" class="input-filtro-estagio" name="tipo_midia" id="tipo_midia_video" value=".video">
                    </label>
                </div>
            </div>
            <div class="contains-chart">
                <div class="contain-charts" data-periodo="outubro_2022">
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": "0" }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 20 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                </div>
                <div class="contain-charts" data-periodo="setembro_2022">
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": "0" }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 20 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                </div>
                <div class="contain-charts" data-periodo="agosto_2022">
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": "0" }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 20 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Fundação</span>
                    </div>
                    <div class="item-chart">
                        <div class="pie" data-pie='{ "percent": 30 }'></div>
                        <span class="span-chart">Escavação</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-carrossel-estagio">
            <div class="contain-carrossel-estagio">
                <div class="owl-carousel owl-theme" id="owl-carousel-estagio">

                    <div class="item-estagio item-video video outubro_2022" data-merge="1">
                        <a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a>
                    </div>


                    <div class="item-estagio foto outubro_2022">
                        <a href="/website/img/empreendimento/item-1-caross-estag.png" data-lightbox="gallery">
                            <img src="/website/img/empreendimento/item-1-caross-estag.png">
                        </a>
                    </div>
                    <div class="item-estagio foto agosto_2022">
                        <a href="/website/img/empreendimento/item-2-caross-estag.png" data-lightbox="gallery">
                            <img src="/website/img/empreendimento/item-2-caross-estag.png">
                        </a>
                    </div>
                    <div class="item-estagio foto setembro_2022">
                        <a href="/website/img/empreendimento/item-3-caross-estag.png" data-lightbox="gallery">
                            <img src="/website/img/empreendimento/item-3-caross-estag.png">
                        </a>
                    </div>

                    <div class="item-estagio item-video video setembro_2022" data-merge="2">
                        <a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="contain-btn">
                <a href="#" class="interesse">Tenho interesse</a>
            </div>
        </div>
    </section>

    <script>
        //controla estado ativo navegacao inferior ao banner
        function boxTop(idBox) {
            var boxOffset = $(idBox).offset();
            return boxOffset.top
        }

        function retornarBtn(dataAnimation, disabled = false) {
            if (disabled) {
                $("button.btn-filter-top").each(function(index) {
                    if ($(this).attr('data-animation') != dataAnimation) {
                        $(this).removeClass('active');
                    }
                });
            }
            return $(`button.btn-filter-top[data-animation="${dataAnimation}"]`)
        }

        $(document).scroll(function() {
            var documentTop = $(this).scrollTop();

            if (documentTop > boxTop('#empreendimento_lancamento_desc') - 120) {
                retornarBtn('empreendimento_lancamento_desc', true).addClass('active');
            } else {
                retornarBtn('empreendimento_lancamento_desc').removeClass('active');
            }

            if (documentTop > boxTop('#empreendimento-diferenciais') - 120) {
                retornarBtn('empreendimento-diferenciais', true).addClass('active');
            } else {
                retornarBtn('empreendimento-diferenciais').removeClass('active');
            }

            if (documentTop > boxTop('#empreendimento-galeria') - 120) {
                retornarBtn('empreendimento-galeria', true).addClass('active');
            } else {
                retornarBtn('empreendimento-galeria').removeClass('active');
            }

            if (documentTop > boxTop('#empreendimento-localizacao') - 120) {
                retornarBtn('empreendimento-localizacao', true).addClass('active');
            } else {
                retornarBtn('empreendimento-localizacao').removeClass('active');
            }

            if (documentTop > boxTop('#empreendimento-estagio-obra') - 120) {
                retornarBtn('empreendimento-estagio-obra', true).addClass('active');
            } else {
                retornarBtn('empreendimento-estagio-obra').removeClass('active');
            }

            if (documentTop > boxTop('#sessao-2') - 120) {
                retornarBtn('sessao-2', true).addClass('active');
            } else {
                retornarBtn('sessao-2').removeClass('active');
            }

            if (documentTop > boxTop('#empreendimento_banner') - 120) {
                retornarBtn('empreendimento_banner', true).addClass('active');
            } else {
                retornarBtn('empreendimento_banner').removeClass('active');
            }
        });

        //scrol suave
        let redirect = (link) => {
            $("html, body").animate({
                scrollTop: $(`#${link}`).offset().top - 100
            }, 600, function() {});
        }
    </script>

    <script>
        // CONTROLADOR OWL CAROUSEL filtro -> sessao "empreendimento-estagio-obra" **************************************************
        var owlFilterEstagio = $('#owl-carousel-estagio').owlCarousel({
            items: 1,
            merge: true,
            loop: true,
            margin: 10,
            video: true,
            lazyLoad: false,
            center: true,
            dots: true,
            stagePadding: 30,
            stopOnHover: true,
            singleItem: true,
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
            videoWidth: false, // Default false; Type: Boolean/Number
            videoHeight: false,
            onTranslate: function() {
                $('.owl-item').find('video').each(function() {
                    this.pause();
                });
            },

            responsive: {
                200: {
                    // autoWidth: true,
                },
                600: {
                    items: 2,
                    autoWidth: false,
                },
                850: {
                    margin: 30,
                    items: 3,
                    stagePadding: 0,
                }
            }
        });
        $('#filtro_data_estagio').on('change', function() {
            $(".contain-charts").each(function(index) {
                $(this).css('display', 'none');
            });
            let filtroChart = $(this).val().replace(".", "");
            $(`.contain-charts[data-periodo=${filtroChart}]`).css('display', 'grid');
            let filter_1 = $(this).val();
            let filter_2 = $('input[type="radio"][name="tipo_midia"]:checked').val();
            const filter = [filter_1, filter_2];
            owlFilterEstagio.owlcarousel2_filter(filter);
        });
        $('input[type="radio"][name="tipo_midia"]').on('click', function() {
            let filter_1 = $('#filtro_data_estagio').val();
            let filter_2 = $(this).val();
            const filter = [filter_1, filter_2];
            owlFilterEstagio.owlcarousel2_filter(filter);
        });

        // CONTROLADOR OWL CAROUSEL filtro -> sessao "empreendimento-galeria" **************************************************
        var owlFilter = $('#owl-carousel-galeria').owlCarousel({
            center: true,
            loop: true,
            items: 1,
            nav: true,
            dots: false,
            lazyLoad: true,
            // stagePadding: 50,
            navText: [$('.am-next'), $('.am-prev')],
            responsive: {
                0: {
                    margin: 10,
                },
                600: {
                    margin: 10,
                },
                1000: {
                    margin: 23,
                },
                1098: {
                    margin: 23,
                    items: 3,
                    autoWidth: true,
                    stagePadding: 0,
                }
            }
        });

        $('.owl-filter-bar').on('click', '.item', function() {
            $('.owl-filter-bar .item').each(function(index) {
                $(this).removeClass("active");
            });
            $(this).addClass("active");
            var $item = $(this);
            var filter_1 = $item.data('owl-filter');
            var filter_2 = null;
            const filter = [filter_1, filter_2];
            owlFilter.owlcarousel2_filter(filter);
        });

        setTimeout(function() {
            $('.owl-filter-bar .item').each(function(index) {
                $(this).click();
                return false;
            });
        }, 2000);
    </script>

    <?php include "_inc_footer_empreendimento.php"; ?>

    <script>
        // MAPA MAPBOX
        mapboxgl.accessToken = 'pk.eyJ1IjoiaGlicmlkYXdlYiIsImEiOiJja284djMyMWwwd20yMm9wd3QzbTZvZnhrIn0.ro1ZJXeWhkK2bCRqOHcx_A';
        var lat = -16.70462320664015;
        var long = -49.26433650500866;
        var map = new mapboxgl.Map({
            container: 'mapa', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [long, lat], // starting position [lng, lat]
            zoom: 17.180720990093583 // starting zoom
        });
        var marker;
        marker = new mapboxgl.Marker().setLngLat([long, lat]).addTo(map);
        $('.mapboxgl-marker').click(function() {
            map.flyTo({
                center: [long, lat],
                zoom: 15
            });
        });
        $('.filtro-mapa').click(function() {
            let latitude = $(this).attr("data-lat");
            let longitude = $(this).attr("data-long");
            marker.setLngLat([longitude, latitude]).addTo(map);
            map.flyTo({
                center: [longitude, latitude],
                zoom: 15,
                essential: true,
            });
            $('.filtro-mapa').each(function(index) {
                $(this).removeClass("active");
            });
            $(this).addClass("active");
        });


        //CIRCULAR PROGRESSBAR
        /************ DOCUMENTAÇÃO ***************/
        // https://github.com/tomickigrzegorz/circular-progress-bar/blob/master/README.md

        window.addEventListener('DOMContentLoaded', () => {
            const globalConfig = {
                "stroke": 10, //largura da barra indicadora
                "colorSlice": "#425545",
                "colorCircle": "#D9D9D9",
                "round": true,
                "size": 85, //largura e altura em px
                "fontSize": "16px",
                "fontWeight": 700,
                "fontColor": "#000",
            }

            const elements = [].slice.call(document.querySelectorAll('.pie'));
            const circle = new CircularProgressBar('pie', globalConfig);

            if ('IntersectionObserver' in window) {
                const config = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.75,
                };

                const ovserver = new IntersectionObserver((entries, observer) => {
                    entries.map((entry) => {
                        if (entry.isIntersecting && entry.intersectionRatio >= 0.75) {
                            circle.initial(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, config);

                elements.map((item) => {
                    ovserver.observe(item);
                });
            } else {
                elements.map((element) => {
                    circle.initial(element);
                });
            }
        });
    </script>
</body>

</html>