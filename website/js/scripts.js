//MASCARAS
$(document).ready(function () {
    $("#cpj_cnpj").mask("000.000.000-00"); //máscara campo CPF/CNPJ pagina contato
})

// OWN CAROUSEL
$(function () {
    // Owl Carousel
    let owl = $("#owl-carousel-1");
    owl.owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 0,
        video: false,
        lazyLoad: true,
        center: true,
        nav: false,
        dots: true
    });
});

$(function () {
    let owl_2 = $("#owl-carousel-2");
    owl_2.owlCarousel({
        merge: true,
        loop: true,
        margin: 10,
        video: false,
        lazyLoad: true,
        center: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
                stagePadding: 50,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            700: {
                items: 3,
            },
            900: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
});

// MODAL VIDEO
$(".video-modal").click(function () {
    let options = {
        modestbranding: 1,
        rel: 0,
        controls: 1,
        showinfo: 0,
        html5: 1,
        autoplay: 1,
        mute: 1,
        loop: 1,
        fs: 0
    }

    var theModal = $(this).data("target"),
        videoSRC = getId($(this).attr("data-video")),
        videoSRCauto = videoSRC + `?${new URLSearchParams(options).toString()}`;

    setTimeout(function () {
        $(theModal + ' iframe').attr('src', videoSRCauto);
    }, 1000);

    $(theModal).on('hidden.bs.modal', function () {
        $(theModal + ' iframe').attr('src', videoSRC);
    });
});

function getId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);

    if (match && match[2].length == 11) {
        return `https://www.youtube.com/embed/${match[2]}`
    } else {
        return 'error';
    }
}

//PEGA O NOME DO ARQUIVO NOS INPUTS FILE, E ADICIONA NA LABEL DO MESMO
document.getElementById('anexo').onchange = function () {
    document.getElementById('label-anexo').innerHTML = ''
    document.getElementById('label-anexo').innerHTML = this.files.item(0).name
};

//CONTATO -> ALTERA AS MASCARAS CPF/CNPJ DO INPUT, AO SELECIONAR O TIPO NO SELECT
document.getElementById('cpj_cnpj_tipo').onchange = function () {
    $("#cpj_cnpj").val("")
    if (this.value == 'cpf') {
        $("#cpj_cnpj").mask("000.000.000-00");
    } else if (this.value == 'cnpj') {
        $("#cpj_cnpj").mask("99.999.999/9999-99");
    }
}

//CONTROLADOR NAVBAR SUPERIOR INTERNA EMPREENDIMENTO
function openColapso() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}