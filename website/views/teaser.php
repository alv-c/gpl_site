<?php
$pagina = "teaser";
include "_inc_headers.php";
?>
<title>Empreendimentos | GPL Incorporadora</title>
</head>

<body id="<?php echo $pagina; ?>">

    <?php
    include "_inc_header.php";
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
                                <input type="text" name="telefone" class="form-cont-emp" placeholder="Seu telefone" required>
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

    <script>
        //controla largura do container formulário banner topo
        $(document).ready(function() {
            let larguraContain = ($(window).width() - 1200) / 2;
            if ($(window).width() >= 1200 && $(window).width() <= 1249) {
                $("#containFormTopo").css("max-width", `calc((100% - ${larguraContain}px) - 30px)`);
            } else if ($(window).width() >= 1250) {
                $("#containFormTopo").css("max-width", `calc((100% - ${larguraContain}px))`);
            }
        })
    </script>

    <?php //include "_inc_footer.php"; 
    ?>
</body>

</html>