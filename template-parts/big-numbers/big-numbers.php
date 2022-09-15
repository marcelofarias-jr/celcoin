<style>
  <?php include(dirname(__FILE__) . '/big-numbers.css'); ?>
</style>

<section class="bignumbers" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/Group.png'; ?>');">
  <div class="container">
    <div class="content">
      <h1 class="title"><?php echo the_field('numeros_titulo', 'option'); ?></h1>
      <div id="bignumbers__slider" class="bignumbers__slider">
        <?php if (have_rows('numeros_card', 'option')) : ?>
            <?php while (have_rows('numeros_card', 'option')) : the_row(); 
            $texto = get_sub_field('numeros_texto');
            $icone = get_sub_field('numeros_icone');
            $numeros = get_sub_field('numeros_numeros');
            ?>
            <div class='slider__slide'>
              <div class="slide__head">
                <img src="<?php echo $icone['url']; ?>">
              </div>
              <div class="slide__body">
                <h2 class="bignumber"><?php echo $numeros; ?></h2>
                <p class="text"><?php echo $texto; ?></p>
              </div>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>