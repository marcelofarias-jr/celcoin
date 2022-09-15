<?php
/*
* Template Name: Categoria Saques e Depositos
*/

get_template_part('head');
get_template_part('header');
$banner_categoria = get_field('banner_categoria');
$banner_sub_teste_categoria = get_field('banner_sub_teste_categoria');
$vantagens_categoria = get_field('vantagens_categoria');
$caracteristicas_categoria = get_field('caracteristicas_categoria');
$carrosel_categoria = get_field('carrosel_categoria');
$infraestrutura_categoria = get_field('infraestrutura_categoria');
?>
<body>
  <style>
      
      @media only screen and (min-width: 1200px) {
        .nav.nav--gray {
          position: fixed;
        }
        .nav__apis {
          position: fixed;   
        }
        .nav .container .nav__flex .box-logo svg path  {
          fill: #806DFB
        }
      }
    <?php include(dirname(__FILE__) . '/assets/pagamentos/scss/app.css'); ?>
  </style>
    <section id="banner">
            <img class="bg-banner banner-desk" src="<?php echo $banner_categoria['imagem']['desktop']['url']; ?>">
            <img class="bg-banner banner-mobile" src="<?php echo $banner_categoria['imagem']['mobile']['url']; ?>" alt="">
            <div class="box-conteudo">
                    <div class="box-esquerda"></div>
                    <div class="box-direita bg-conteuto-produtos">
                    </div>
                      <div class="box-textos <?php echo $banner_categoria['white_text'] ? 'text--white' : '' ?> col-xs-6 col-sm-12 row container">
                        <div class="box-cont-intern">
                          <div class="titulo-banner texto-azul-escuro"><?php the_title(); ?></div>
                          <div class="texto-padrao texto-azul-escuro"><?php the_content(); ?></div>  
                          <div class="box-cta">
                              <a class="button button--magenta" data-open-contact><?php echo $banner_categoria['botao_esquerda']['texto']; ?> <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?></a>
                              <a class="button bg-transparent texto-azul-escuro cta-borda-azul-escuro" href="<?php echo $banner_categoria['botao_direita']['link']['url']; ?>" target="_blank"><?php echo $banner_categoria['botao_direita']['texto']; ?></a>
                          </div>
                        </div>
                      </div>
                
            </div>
        </section>

        <style>

          @media only screen and (min-width: 1200px) {
            <?php if ($banner_categoria['box_conteudo'] === "Direita" ) { ?>
              #banner .bg-conteuto-produtos {
                  background: linear-gradient(-103.64deg, #FDFDFF 9.39%, rgba(253, 253, 255, 0.15) 94.11%);
                  opacity: 0.94;
                  backdrop-filter: blur(22px);
                  position: absolute;
                  right: 0;
              }
              #banner .box-conteudo .box-textos {
                position: relative;
              }
            <?php } ?>
            <?php if ($banner_categoria['box_conteudo'] === "Esquerda" ) { ?>
              #banner .bg-conteuto-produtos {
                  background: linear-gradient(103.64deg, #FDFDFF 9.39%, rgba(253, 253, 255, 0.15) 94.11%);
                  opacity: 0.94;
                  backdrop-filter: blur(22px);
                  position: absolute;
              }
              #banner .box-esquerda {
                display: none;
              }
              #banner .box-conteudo .box-textos {
                position: relative;
                padding: 0;
                width: 100%;
                margin: 0 auto
              }

            <?php } ?>
          }

        </style>


    <section>


    <section id="banner-sub-teste">
        <img class="bg-banner banner-desk" src="<?php echo $banner_sub_teste_categoria['background']['desktop']['url']; ?>" alt="">
        <img class="bg-banner banner-mobile" src="<?php echo $banner_sub_teste_categoria['background']['mobile']['url']; ?>" alt="">
        <div class="box-conteudo">

            <div class="box-textos <?php echo $banner['white_text'] ? 'text--white' : '' ?>">
                <div class="box-textos-int">
                    <div class="titulo-banner texto-branco"><?php echo $banner_sub_teste_categoria['titulo']; ?></div>
                    <div class="texto-padrao texto-branco"><?php echo $banner_sub_teste_categoria['texto']; ?></div>
                </div>
                <div class="box-cta">
                    <a class="button button--magenta-secondary-inverse" data-open-contact><?php echo $banner_sub_teste_categoria['botao']['texto']; ?> <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?></a>
                </div>
            </div>
            
        </div>
    </section>

<section>


    <section id="accordeon">
        <div class="box-geral">
            <div class="box-esquerda">
                
                <div class="box-accordeon">
                    <div class="box-titulo sub-azul-mob">
                        <div class="titulo-medio texto-azul-escuro sub-azul-desk"><?php echo $vantagens_categoria['titulo']; ?></div>
                    </div>
                
                        <?php foreach($vantagens_categoria['accordion'] as $opcao) : ?>
                            <div class="box-opcao">
                                <button class="accordion bg-transparent">
                                    <div class="titulo-accordeon texto-azul-escuro bg-transparent"><?php echo $opcao['opcao']['titulo']; ?></div>
                                    <div class="box-setinha bg-azul texto-branco"><?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?></div>
                                </button>
                                <div class="panel">
                                    <div class="texto-padrao texto-azul-escuro"><?php echo $opcao['opcao']['texto']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        </div>

                    </div>

                <div class="box-direita">
                    <img class="bg-banner banner-mobile" src="<?php echo $vantagens_categoria['imagem']['url']; ?>" alt="">
                </div>
            </div>    

    </section>



    <section id="cards-impacto" class="bg-cinza">
        <div class="box-titulo sub-azul-mob">
            <div class="titulo-medio texto-azul-escuro sub-azul-desk"><?php echo $caracteristicas_categoria['titulo']; ?></div>
        </div>
        <div class="box-cards">

            <?php foreach($caracteristicas_categoria['cards'] as $cardscaract) : ?>
                <div class="card-impacto bg-branco">
                    <div class="box-titulo-card">
                        <img src="<?php echo $cardscaract['imagem']['url']; ?>" alt="">
                        <div class="titulo-cards-impacto texto-azul-escuro"><?php echo $cardscaract['titulo']; ?></div>
                    </div>
                    <div class="texto-azul-escuro texto-padrao"><?php echo $cardscaract['texto']; ?></div>
                </div>
            <?php endforeach; ?>


        </div>
    </section>

    <style>

        .slick-arrow {
            background: #4600E0 !important;
        }

        .slick-arrow div svg path{
            fill: #FFFFFF;
        }
        
        .slick-disabled {
            background: transparent !important;
            border: solid 2px #CEDDE5;
            opacity: 0.5;
        i}
        .slick-disabled div svg path {
            fill: #CEDDE5 !important;
        }

    </style>

    <section id="carrosel-api">
        <div class="box-carrosel-geral">
            <div class="box-titulo sub-azul-mob">
                <div class="titulo-medio texto-azul-escuro sub-azul-desk"><?php echo $carrosel_categoria['titulo']; ?></div>
            </div>
            <div class="carrosel-produtos">

                <?php foreach($carrosel_categoria['cards'] as $cardcarrosel) : ?>
                    <div class="card-produtos bg-branco">
                        <div class="box-esquerda">
                            <div class="box-titulo-card">
                                <div class="texto-azul-escuro titulo-card-produtos-carrosel"><?php echo $cardcarrosel['titulo']; ?></div>
                            </div>
                            <div class="texto-azul-escuro texto-padrao"><?php echo $cardcarrosel['texto']; ?></div>
                            <div class="box-cta">
                              <a class="button button--default-inverse" href="<?php echo $cardcarrosel['botao']['link']['url']; ?>"><?php echo $cardcarrosel['botao']['texto']; ?>  <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?></a>
                            </div>
                        </div>
                        <div class="box-direita">
                            <img src="<?php echo $cardcarrosel['imagem']['url']; ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>



            </div>

        </div>
    </section>

    <section id="bg-carrosel-produtos" class="bg-azul"></section>

    <section id="cards-posts" class="bg-azul">
        <div class="box-titulo sub-azul-mob">
            <div class="titulo-medio texto-branco"><?php echo $infraestrutura_categoria['titulo']; ?></div>
        </div>
        <div class="box-cards">
            
            <?php foreach($infraestrutura_categoria['cards'] as $cardsposts) : ?>
                <a href="<?php echo $cardsposts['link']->guid; ?>" class="card-prod bg-branco">
                    <div class="box-titulo-int">
                        <img src="<?php echo $cardsposts['icone']['url']; ?>" alt="">
                        <div class="texto-azul-escuro titulo-card-produtos"><?php echo $cardsposts['titulo']; ?></div>
                    </div>
                    <div class="texto-mini texto-azul-escuro"><?php echo $cardsposts['texto']; ?></div>
                </a>
            <?php endforeach; ?>



        </div>
    </section>

    <?php include(dirname(__FILE__) . '/template-parts/sales/sales.php'); ?>


</section>


</body>



<?php get_template_part('footer'); ?>

<script>
  <?php include(dirname(__FILE__) . '/assets/pagamentos/js/main.js'); ?>
</script>