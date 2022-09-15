<?php
/*
* Template Name: mapa
*/

get_template_part('header');
$label = get_field('mapa_label');
$titulo = get_field('mapa_titulo');
$subtitulo = get_field('mapa_subtitulo');
?>
<div class="mapa__destaque">
  <div class="texto container">
    <span><?php echo $label; ?></span>
    <h1><?php echo $titulo; ?></h1>
  </div>
</div>

<div class="mapa container">
  <div class="mapa__titulo">
    <h2><?php echo $subtitulo; ?></h2>
  </div>
  <div class="mapa__conteudo">
    <?php if (have_rows('mapa_card1')) : ?>
      <?php while (have_rows('mapa_card1')) : the_row();
        $cor = get_sub_field('cor');
        $titulo = get_sub_field('titulo');
      ?>
        <div class="mapa__card">
          <div class="card__titulo">
            <div class="borda" style="background-color: <?php echo $cor; ?>"></div>
            <a href="<?php echo $titulo['url']; ?>">
              <h3><?php echo $titulo['title']; ?></h3>
            </a>
          </div>
          <div class="card__conteudo">
            <?php if (have_rows('links')) : ?>
              <ul>
                <?php while (have_rows('links')) : the_row();
                  $link = get_sub_field('mapa_card_link');
                ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>
  <div class="mapa__conteudo">
    <?php if (have_rows('mapa_card2')) : ?>
      <?php while (have_rows('mapa_card2')) : the_row();
        $cor = get_sub_field('cor');
        $titulo = get_sub_field('titulo');
      ?>
        <div class="mapa__card">
          <div class="card__titulo">
            <div class="borda" style="background-color: <?php echo $cor; ?>"></div>
            <a href="<?php echo $titulo['url']; ?>">
              <h3><?php echo $titulo['title']; ?></h3>
            </a>
          </div>
          <div class="card__conteudo">
            <?php if (have_rows('links')) : ?>
              <ul>
                <?php while (have_rows('links')) : the_row();
                  $link = get_sub_field('mapa_card_link');
                ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>
  <div class="mapa__conteudo">
    <?php if (have_rows('mapa_card3')) : ?>
      <?php while (have_rows('mapa_card3')) : the_row();
        $cor = get_sub_field('cor');
        $titulo = get_sub_field('titulo');
      ?>
        <div class="mapa__card">
          <div class="card__titulo">
            <div class="borda" style="background-color: <?php echo $cor; ?>"></div>
            <a href="<?php echo $titulo['url']; ?>">
              <h3><?php echo $titulo['title']; ?></h3>
            </a>
          </div>
          <div class="card__conteudo">
            <?php if (have_rows('links')) : ?>
              <ul>
                <?php while (have_rows('links')) : the_row();
                  $link = get_sub_field('mapa_card_link');
                ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>
  <div class="mapa__conteudo">
    <?php if (have_rows('mapa_card4')) : ?>
      <?php while (have_rows('mapa_card4')) : the_row();
        $cor = get_sub_field('cor');
        $titulo = get_sub_field('titulo');
      ?>
        <div class="mapa__card">
          <div class="card__titulo">
            <div class="borda" style="background-color: <?php echo $cor; ?>"></div>
            <a href="<?php echo $titulo['url']; ?>">
              <h3><?php echo $titulo['title']; ?></h3>
            </a>
          </div>
          <div class="card__conteudo">
            <?php if (have_rows('links')) : ?>
              <ul>
                <?php while (have_rows('links')) : the_row();
                  $link = get_sub_field('mapa_card_link');
                ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>
  <div class="mapa__conteudo">
    <?php if (have_rows('mapa_card5')) : ?>
      <?php while (have_rows('mapa_card5')) : the_row();
        $cor = get_sub_field('cor');
        $titulo = get_sub_field('titulo');
      ?>
        <div class="mapa__card">
          <div class="card__titulo">
            <div class="borda" style="background-color: <?php echo $cor; ?>"></div>
            <a href="<?php echo $titulo['url']; ?>">
              <h3><?php echo $titulo['title']; ?></h3>
            </a>
          </div>
          <div class="card__conteudo">
            <?php if (have_rows('links')) : ?>
              <ul>
                <?php while (have_rows('links')) : the_row();
                  $link = get_sub_field('mapa_card_link');
                ?>
                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
  </div>

</div>
</div>
<?php get_footer(); ?>