<?php

/*
* Template Name: solucoes
*/
get_header();
$dir = get_template_directory_uri();
$banner = get_field('solucoes_banner');
?>
<section id="banner__soluções">
  <div class="banner__desktop">
    <div class="box-conteudo container ">
      <div class="titulo">
        <div class="conteudo">
          <span><?php echo $banner['solucoes_label']; ?></span>
          <?php echo $banner['solucoes_titulo']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="banner__mbl ">
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner-soluções 2.png" class="img-responsive">
    <div class="texto__banner container">
      <div class="conteudo col">
        <span><?php echo $banner['solucoes_label']; ?></span>
        <?php echo $banner['solucoes_titulo']; ?>
      </div>
    </div>
  </div>
</section>
</div>
<div class="solucoes__conteudo">
  <?php if (have_rows('solucoes_cards')) : ?>
    <?php while (have_rows('solucoes_cards')) : the_row();
      $titulo = get_sub_field('titulo');
    ?>
      <div class="conteudo__mae aberto container">
        <h2><?php echo $titulo; ?></h2>
        <?php if (have_rows('cards_solucoes')) : ?>
          <div class="conteudo__card">
            <?php while (have_rows('cards_solucoes')) : the_row();
              $icone = get_sub_field('icone');
              $texto = get_sub_field('texto');
              $link = get_sub_field('link');
            ?> <div class="card__filho">
                <a href="<?php echo $link['url']; ?>">
                  <img class='card-img-top' src="<?php echo $icone['url']; ?>" class='img-responsive'>
                  <h3><?php echo $link['title']; ?></h3>
                </a>
                <p><?php echo $texto; ?></p>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <span id="primeira">
    <!-- Primeira Parte -->
    <?php if (have_rows('solucoes_cards_close')) : ?>
      <?php while (have_rows('solucoes_cards_close')) : the_row();
        $titulo = get_sub_field('titulo');
      ?>
        <div class="conteudo__mae aberto container">
          <h2><?php echo $titulo; ?></h2>
          <?php if (have_rows('card_solucoes_close')) : ?>
            <div class="conteudo__card">
              <?php while (have_rows('card_solucoes_close')) : the_row();
                $icone = get_sub_field('icone');
                $texto = get_sub_field('texto');
                $link = get_sub_field('link');
              ?> <div class="card__filho">
                  <a href="<?php echo $link['url']; ?>">
                    <img class='card-img-top' src="<?php echo $icone['url']; ?>" class='img-responsive'>
                    <h3><?php echo $link['title']; ?></h3>
                  </a>
                  <p><?php echo $texto; ?></p>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </span>
  <!-- Segunda Parte -->
  <span id="segunda">
    <?php if (have_rows('solucoes_cards_close2')) : ?>
      <?php while (have_rows('solucoes_cards_close2')) : the_row();
        $titulo = get_sub_field('titulo');
      ?>
        <div class="conteudo__mae aberto container">
          <h2><?php echo $titulo; ?></h2>
          <?php if (have_rows('card_solucoes_close2')) : ?>
            <div class="conteudo__card">
              <?php while (have_rows('card_solucoes_close2')) : the_row();
                $icone = get_sub_field('icone');
                $texto = get_sub_field('texto');
                $link = get_sub_field('link');
              ?> <div class="card__filho">
                  <a href="<?php echo $link['url']; ?>">
                    <img class='card-img-top' src="<?php echo $icone['url']; ?>" class='img-responsive'>
                    <h3><?php echo $link['title']; ?></h3>
                  </a>
                  <p><?php echo $texto; ?></p>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </span>


</div>
<button id="vermais" value="0" class="button button--default">
  <div class="loader"></div> Carregar mais
</button>
<?php get_footer(); ?>

<script>
  const vermais = document.getElementById("vermais")
  const parte0 = document.getElementById("primeira")
  const parte1 = document.getElementById("segunda")
  const loader = document.getElementsByClassName("loader")

  vermais.addEventListener("click", () => {
    if (parseInt(vermais.getAttribute("value"))) {
      loader[0].style.display = "block"
      setTimeout(() => {
        parte1.style.display = "block"
        vermais.style.display = "none"
      }, 1000)
    } else {
      loader[0].style.display = "block"
      setTimeout(() => {
        parte0.style.display = "block"
        vermais.setAttribute("value", "1")
        loader[0].style.display = "none"
      }, 1000);
    }
  })
</script>