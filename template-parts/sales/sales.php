<?php $assets = dirname(__FILE__, 3) . '/assets'; ?>
<style>
  <?php include(dirname(__FILE__) . '/sales.css') ?>
</style>
<section class="sales">
  <div class="container">
    <div class="sales__card sales__card--flex">
      <div class="flex__column">

        <h1><?php echo the_field('vendas_titulo', 'option'); ?></h1>
        <a href="javascript:void(0);" class="button button--green" data-open-contact>
          <?php echo the_field('vendas_botao', 'option'); ?>
          <?php include($assets . '/vectors/chevron-down.svg'); ?>
        </a>
      </div>
      <div class="flex__column">
        <a href="https://developers.celcoin.com.br/docs" class="sales__docs" target="_blank">
          <p class="title">
            <?php
            include($assets . '/vectors/document.svg');
            echo "<span>Documentação</span>";
            include($assets . '/vectors/chevron-right-purple.svg');
            ?>
          </p>
          <p class="description">Explore nossas APIs</p>
        </a>
        <a href="https://developers.celcoin.com.br/reference/integrando-na-celcoin" class="sales__docs" target="_blank">
          <p class="title">
            <?php
            include($assets . '/vectors/documentation.svg');
            echo "<span>Primeiros passos</span>";
            include($assets . '/vectors/chevron-right-purple.svg');
            ?>
          </p>
          <p class="description">Veja como colocar em prática</p>
        </a>
      </div>
    </div>
  </div>
</section>