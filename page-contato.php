<?php
get_header();
include(dirname(__FILE__) . '/template-parts/contato/contato.php');
$subtitulo = get_field('contato_subtitulo');
$titulo = get_field('contato_titulo');
?>
<div class="contato">
  <div class="container">
    <div class="contato__titulo">
      <h1><?php echo $titulo; ?></h1>
      <p><?php echo $subtitulo; ?></p>
    </div>
  </div>
  <div class="container">
    <style>
      .contato__cards {
        justify-content: flex-start !important;
      }

      @media (min-width: 992px) {
        .contato__cards .contato__cards__item:first-child {
          margin-right: 30px;
        }
      }
    </style>
    <?php if (have_rows('contato_cards')) : ?>
      <div class="contato__cards">
        <?php while (have_rows('contato_cards')) : the_row();
          $icone = get_sub_field('icone');
          $titulo = get_sub_field('titulo');
          $texto = get_sub_field('texto');
          $botao = get_sub_field('botao');
          $formulario = get_sub_field('botao_formulario');
          $ligar = get_sub_field('botao_ligar');
        ?>
          <div class="contato__cards__item">
            <img src="<?php echo $icone['url']; ?>">
            <h3><?php echo $titulo; ?></h3>
            <p><?php echo $texto; ?></p>
            <button>
              <a class="button button--green" <?php echo $formulario; ?> <?php echo $ligar; ?>>
                <?php echo $botao; ?>
                <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?>
              </a>
            </button>

          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>

</div>
<script>
  //configuração de exibição do formulário
  document.getElementById("tab1").style.display = "inline-block"
  document.getElementById("voltar").style.display = "none"
  document.getElementById("falar").style.display = "none"
  document.getElementById("fechar").style.display = "none"
  document.getElementById("avancar").style.display = "inline-block"
  document.getElementById("passo1").style.backgroundColor = "#806DFB"


  function next(n) {
    document.getElementById("tab2").style.display = "block"
    document.getElementById("tab1").style.display = "none"
    document.getElementById("avancar").style.display = "none"
    document.getElementById("voltar").style.display = "inline-block"
    document.getElementById("falar").style.display = "inline-block"
    document.getElementById("passo2").style.backgroundColor = "#806DFB"
  }

  function back(n) {
    document.getElementById("tab2").style.display = "none"
    document.getElementById("tab1").style.display = "inline-block"
    document.getElementById("avancar").style.display = "inline-block"
    document.getElementById("falar").style.display = "none"
    document.getElementById("voltar").style.display = "none"
  }

  function talk(n) {
    document.getElementById("tab2").style.display = "none"
    document.getElementById("voltar").style.display = "none"
    document.getElementById("falar").style.display = "none"
    document.getElementById("fechar").style.display = "inline-block"
    document.getElementById("tab3").style.display = "inline-block"
  }
</script>
<?php get_footer(); ?>
<script>
  $("#bignumbers__slider").slick({
    dots: false,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    centerMode: false,
    arrows: false,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 3.2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2.2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true
        }
      }
    ]
  });
</script>