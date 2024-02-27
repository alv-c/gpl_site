<?php
$pagina = "gpl-acontece";
include "_inc_headers.php";
?>
<title>GPL Acontece | GPL Incorporadora</title>
</head>

<body id="<?php echo $pagina; ?>">

    <?php
    include "_inc_header.php";
    ?>

    <section class="acontece_banner">
        <div class="container">
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
                <a href="./empreendimentos">GPL acontece</a>
            </div>
            <div class="contain-desc">
                <div class="contain-titulo">
                    <span class="titulo">GPL acontece</span>
                    <span class="desc">Lorem Ipsum has been the industry's standard dummy text ever.</span>
                </div>
                <div class="contain-img">
                    <img src="website\img\gpl-acontece\banner_acontece.png">
                    <span class="desc-img">20/12/2023</span>
                </div>
                <div class="contain-info">
                    <span class="info-destaque">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem ispum.
                    </span>
                    <div class="contain-btn-info">
                        <a href="#" class="leia-mais">Leia mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="acontece-listagem">
        <div class="container">
            <div class="grid-listagem">
                <div class="card-acontece">
                    <div class="contain-img">
                        <img src="/website/img/gpl-acontece/card-acontece-1.png">
                        <span class="desc-img-card">20/12/2023</span>
                    </div>
                    <div class="bottom-card-acontece">
                        <span class="desc">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </span>
                        <div class="contain-btn-card">
                            <a href="#" class="leia-mais-card">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    //include "_inc_footer.php";
    ?>
</body>

</html>