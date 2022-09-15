<?php include(dirname(__FILE__) . '/template-parts/footer/footer.php') ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
<script type="35613390c978751d1245e83d-text/javascript" src='https://js.hs-scripts.com/7098821.js?integration=WordPress&#038;ver=8.13.58' async defer id='hs-script-loader'></script>

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
      $("#bignumbers__slider").slick({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        centerMode: false,
        arrows: false,
        responsive: [
          {
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