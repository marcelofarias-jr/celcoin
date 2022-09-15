<style>
  <?php include(dirname(__FILE__) . '/potential.css'); ?>
</style>

<section class="potential">
  <div class="container">
    <div class="flex">
      <div class="flex__column">
        <p class="disclaimer"><?php echo the_field('teste_label', 'option'); ?></p>
        <p class="title"><?php echo the_field('teste_titulo', 'option'); ?></p>
      </div>
      <div class="flex__column">
        <a href="javascript:void(0);" class="button button--green" data-open-contact><?php echo the_field('teste_botao', 'option'); ?></a>
      </div>
    </div>
  </div>
</section>