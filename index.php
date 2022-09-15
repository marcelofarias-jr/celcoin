<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php the_title(); ?></title>

  <?php wp_head(); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
</head>

<body>
  <div class="wrapper__global">
    <?php
    $assets = dirname(__FILE__) . '/assets';
    include(dirname(__FILE__) . '/template-parts/navbar.php');
    include(dirname(__FILE__) . '/template-parts/contato/contato.php');
    $banner = get_field('banner_home');
    $api = get_field('apis');
    $cartao = get_field('cartao');
    $developer = get_field('developer_hub');
    ?>
    <main class="home">
      <?php if ( $banner['banner_titulo'] || $banner['banner_texto'] ) : ?>
        <section class="banner_home">
          <section class="container" style="position: relative;">
            <div class="row">
              <div class="col-xs-6 col-sm-12">
                <div class="title">
                  <?php echo $banner['banner_titulo']; ?>
                </div>
                <p class="subtitle">
                  <?php echo $banner['banner_texto']; ?>
                </p>
                <button type="button" class="button button--dark" data-open-contact>
                  Conheça mais <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?>
                </button>

                <style>
                  main.home .banner_home .title strong {
                    color: #806DFB;
                  }

                  .lottie-banner {
                    position: absolute;
                    top: -81px;
                    right: -262px;
                  }

                  .lottie-banner lottie-player {
                    width: 1270px !important;
                    height: 800px !important;
                  }

                  @media (max-width: 1399px) {
                    .lottie-banner {
                      right: -192px;
                    }

                    .lottie-banner lottie-player {
                      width: 1020px !important;
                    }
                  }

                  @media (max-width: 1199px) {
                    main.home .banner_home {
                      margin-top: 0;
                    }

                    .lottie-banner lottie-player {
                      width: 855px !important;
                    }
                  }

                  @media (max-width: 992px) {
                    main.home .banner_home {
                      margin-top: 80px;
                    }

                    main.home .banner_home .title {
                      margin-top: 51px !important;
                    }

                    .lottie-banner {
                      left: -138px;
                      right: initial;
                      top: -297px;
                      pointer-events: none;
                      position: relative;
                    }

                    .lottie-banner lottie-player {
                      width: calc(100% + 300px) !important;
                    }
                  }
                </style>
                <div class="lottie-banner">
                  <lottie-player src="https://assets5.lottiefiles.com/private_files/lf30_xdul2o7w.json" background="transparent" speed="1" style="width: 800px; height: 800px;" loop autoplay></lottie-player>
                </div>
              </div>
            </div>
          </section>
        </section>
      <?php endif; ?>
      <section class="container solucoes">
        <div class="row">
          <div class="col-sm-12 titulo_solucoes">
            <div class="section-mini-title">
              <?php echo $api['api_label']; ?>
              <h2><?php echo $api['api_titulo']; ?></h2>
              <div class="borda"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php if (have_rows('card_home')) : ?>
            <div class="col conteudo_solucoes">
              <div class="row">
                <?php while (have_rows('card_home')) : the_row();
                  $icone = get_sub_field('icone');
                  $linkpai = get_sub_field('link_pai');
                ?>
                  <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                      <a href="<?php echo $linkpai['url']; ?>">
                        <img class='card-img-top' src='<?php echo $icone['url']; ?>' class=''>
                        <h3><?php echo $linkpai['title']; ?></h3>
                      </a>
                      <hr>
                      <div class="card_conteudo">
                        <?php if (have_rows('links')) : ?>
                          <?php while (have_rows('links')) : the_row();
                            $link = get_sub_field('link');
                          ?>
                            <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
      <section class="container cartao">
        <div class="row">
          <div class="col offset-md-1">
            <div class="cartao__titulo">
              <span><?php echo $cartao['label']; ?></span>
              <div class="titulo">
                <?php echo $cartao['titulo']; ?>
              </div>
              <div class="borda"></div>
            </div>
            <?php if (have_rows('cartao')) : ?>
              <div class="cartao__conteudo">
                <?php while (have_rows('cartao')) : the_row();
                ?>
                  <ul>
                    <?php if (have_rows('topicos')) : ?>
                      <div class="card_conteudo">
                        <?php while (have_rows('topicos')) : the_row();
                          $texto = get_sub_field('texto');
                          $icone = get_sub_field('icone');
                        ?>
                          <li>
                            <img class='card-img-top' src="<?php echo $icone['url']; ?>">
                            <p class='text'><?php echo $texto; ?></p>
                          </li>

                        <?php endwhile; ?>
                      </div>
                    <?php endif; ?>
                  </ul>
                <?php endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="col imagem-cartao">
            <img src='<?php bloginfo('template_directory'); ?>/assets/img/Rectangle.png' class="phone">
          </div>
        </div>
      </section>

      <?php include(dirname(__FILE__) . '/template-parts/market/market.php') ?>

      <section class="banner_dev">
        <section class="container dev">
          <div class="row">
            <div class="col-sm-7">
              <div class="container_image">
                <lottie-player id="lottie" src="<?php bloginfo('template_directory'); ?>/assets/js/lf30_editor_a635sgu7.json" background="transparent" speed="1" loop autoplay></lottie-player>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="container_conteudo">
                <span><?php echo $developer['label']; ?></span>
                <h3><?php echo $developer['titulo']; ?></h3>
                <p><?php echo $developer['texto']; ?></p>
                  <?php if (have_rows('developer_hub')) : ?>
                    <ul class="d-none d-sm-block">
                      <?php while (have_rows('developer_hub')) : the_row();
                      ?>
                        <?php if (have_rows('topicos')) : ?>
                          <?php while (have_rows('topicos')) : the_row();
                            $texto = get_sub_field('topico-texto');
                          ?>
                            <li>
                              <?php echo $texto; ?>
                            </li>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>
                <style>
                  main.home .banner_dev .title .container__conteudo {
                    display: flex;
                  }
                </style>
                <span class="subtitulo  d-block d-sm-none">
                  <?php echo $developer['texto_mbl']; ?>
                </span>
                <button onclick="window.open('https://developers.celcoin.com.br/docs','_blank')" type="button" class="button button--default" style="white-space: nowrap" target="_blank">Leia a documentação</button>
              </div>
            </div>
          </div>
        </section>
      </section>
      <?php
      include(dirname(__FILE__) . '/template-parts/potential/potential.php');
      include(dirname(__FILE__) . '/template-parts/big-numbers/big-numbers.php');
      include(dirname(__FILE__) . '/template-parts/sales/sales.php');
      ?>
    </main>
    <?php include(dirname(__FILE__) . '/template-parts/footer/footer.php') ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>

  <?php if ( have_rows('imagens_bolinhas', 'option') ) : ?>
  <script>
    var images = [
      <?php
        $count = 0;
        while ( have_rows('imagens_bolinhas', 'option') ) :
          the_row();
          $count++;
        ?>
        "<?php echo get_sub_field('imagem')['url']; ?>",
      <?php endwhile; ?>
    ]
    
    var vmin, vmax, cols, rows, centerX, centerY, DistX, DistY, dots;

    var animationHolder = $('#holder');

    function init() {
      vmin = Math.min($('#wrapper').height(), $(window).width());
      vmax = Math.max($('#wrapper').height(), $(window).width());
      dots = 2.5;
      cols = Math.ceil(animationHolder.width() / vmin * dots) + 1;
      rows = Math.ceil(animationHolder.height() / vmin * dots * 2 / Math.sqrt(3)) + 1;
      centerX = $(window).width() / 2;
      centerY = $('#wrapper').height() / 2;
      if ($('#wrapper').height() > $(window).width()) {
        DistX = animationHolder.width() / (cols - 1);
        DistY = DistX / 2 * Math.sqrt(3);
      } else {
        DistY = animationHolder.height() / (rows - 1);
        DistX = DistY * 3 / Math.sqrt(3);
      }

      $('#holder').find('span').each(function() {
        $(this).remove();
      });

      for (var m = 0; m < cols * rows; m++) { // create needed circles
        animationHolder.append('<span></span>');
      }

      var count = 0;
      var index = 1; //locate circles
      for (var i = 0; i < cols; i++) { //iterate collumns
        for (var j = 0; j < rows; j++) { //iterate rows
          if (j % 2 == 0) { //find rows to offset
            $('#holder').find('span:nth-of-type(' + index + ')').css({
              'left': DistX * i + 'px',
              'top': DistY * j + 'px'
            });
          } else {
            $('#holder').find('span:nth-of-type(' + index + ')').css({
              'left': DistX * i + (DistX / 2) + 'px',
              'top': DistY * j + 'px'
            });
          }
          
          $('#holder').find('span:nth-of-type(' + index + ')').css({
            'background-image': `url(${images[count]})`,
            'background-size': 'cover'
          })
          index++;
          count++;

          if ( count === <?php echo $count; ?> ) {
            count = 0;
          }
        }
      }

    }

    let maxMultiplier = 45;
    function size() {
      let ww = window.innerWidth;
      if ( ww >= 1590 ) {
        maxMultiplier = 45
      }

      if ( ww <= 1589 && ww >= 1480 ) {
        maxMultiplier = 35
      }

      if ( ww <= 1479 ) {
        maxMultiplier = 30
      }

      $('#holder').find('span').each(function() {
        var toCenter = Math.sqrt(Math.pow(0 - $('#wrapper').height() + ($(this).height() / 2) - centerY, 2) + Math.pow($(this).offset().left + ($(this).width() / 2) - centerX, 2));
        $(this).css({
          'height': 28 - (toCenter / vmax * maxMultiplier) + 'vmin',
          'width': 28 - (toCenter / vmax * maxMultiplier) + 'vmin'
        });
      });
    }

    init();
    size();

    $(window).resize(function() {
      init();
      size();
    });

    var clientX = 0;
    var reverse = true;
    setInterval(function() { 
      if ( !reverse ) {
        ++clientX;
      } else {
        --clientX;
      }

      if ( Math.abs(clientX) === $(window).width() ) {
        reverse = false;
      }

      if ( clientX === 0 ) {
        reverse = true;
      }

      posX = clientX - centerX;
      animationHolder.css({
        'margin-top': 30 - ($('#holder').height() / 4) + 'px',
        'margin-left': posX + 'px'
      });
      size();
    }, 1)
  </script>
<?php endif; ?>

  <script>
    // const scroll = new LocomotiveScroll({
    //   el: document.querySelector('[data-scroll-container]'),
    //   smooth: true
    // });

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
</body>

</html>