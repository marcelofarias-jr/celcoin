<style>
  <?php include(dirname(__FILE__) . '/market.css'); ?>
</style>

<?php if ( get_field('titulo_mercado', 'option') ) : ?>
  <section class="market">
    <div class="market__content">
      <?php echo get_field('titulo_mercado', 'option'); ?>
      <div class="borda"></div>
      <p class="subtitle"><?php echo get_field('texto_mercado', 'option'); ?></p>
    </div>
    <div class="market__watch">
      <img class="watch__image" src="<?php echo get_template_directory_uri() . '/assets/img/watch.png' ?>" alt="">
    </div>
  </section>

  <?php if ( have_rows('imagens_bolinhas', 'option') ) : ?>
    <div id="wrapper" class="animation__wrapper">
      <div id="holder"></div>
    </div>
  <?php endif; ?>
<?php endif; ?>