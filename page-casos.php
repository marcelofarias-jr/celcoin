<?php
/*
* Template Name: casos
*/
get_header();
$banner = get_field('caso_banner');
$categoria = get_field('caso_categoria');
?>
<div class="banner__casos">
  <div class="container">
    <div class="banner__texto">
      <span><?php echo $banner['caso_label']; ?></span>
      <?php echo $banner['caso_titulo']; ?>
      <p><?php echo $banner['caso_subtitulo']; ?></p>
    </div>
    <div class="banner__form banner__form--alt">
      <?php echo do_shortcode('[forminator_form id="1131"]'); ?>
    </div>
  </div>
</div>

<div class="casos__categorias">
  <div class="container">
    <div class="casos__categorias__titulo">
      <h2><?php echo $categoria['categoria_titulo']; ?></h2>
    </div>
    <div class="casos__categorias__conteudo">
      <?php if (have_rows('caso_card')) : ?>
        <?php while (have_rows('caso_card')) : the_row();
          $casoicone = get_sub_field('caso-icone');
          $casolink = get_sub_field('caso-link');
        ?>
          <div class="card__categorias">
            <a href="<?php echo $casolink['url']; ?>" draggable="false">
              <img class='card-img-top' draggable="false" src='<?php echo $casoicone['url']; ?>' class='img-responsive'>
              <h3><?php echo $casolink['title']; ?></h3>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="blog">
  <?php
    $postsQuery = new WP_Query(array(
      'orderby' => 'rand',
      'posts_per_page' => 4
    ));

    if ( $postsQuery->have_posts() ) :
      $get_author_id = get_the_author_meta('ID');
  ?>
    <style>
      .posts {
    padding: 0 0 80px;
  }

  .posts__single {
    background: #F4F4F4;
  }

  .posts__single .title {
    margin-bottom: 80px;
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 60px;
    color: #1E1360;
    text-align: center;
  }

  .posts .post__card {
    box-shadow: 0px 4px 12px rgba(48, 45, 63, 0.13);
    border-radius: 20px;
    overflow: hidden;
    text-decoration: none;
    display: block;
    background: #fff;
  }

  .posts .post__card .card__body {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 286px;
    position: relative;
    padding: 10px 15px;
    display: flex;
    align-items: flex-end;
  }

  .posts .post__card .card__body::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, #1E1360 0%, rgba(255, 255, 255, 0) 100%);
    left: 0;
    top: 0;
  }

  .posts .post__card .card__body svg {
    position: absolute;
    top: 13px;
    right: 0;
    cursor: pointer;
    z-index: 3;
  }

  .posts .post__card .card__body .post__content {
    position: relative;
    z-index: 2;
  }

  .posts .post__card .card__body .post__content .category {
    position: relative;
    margin-bottom: 20px;
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 32px;
    color: #FFFFFF;
    text-align: left;
  }

  .posts .post__card .card__body .post__content .category::after {
    content: "";
    bottom: -8px;
    width: 100%;
    height: 2px;
    background: #fff;
    position: absolute;
    left: 0;
  }

  .posts .post__card .card__body .post__content .category[data-category="Open Banking"]::after {
    background: #F96500;
  }

  .posts .post__card .card__body .post__content .category[data-category="Pagamento de contas"]::after {
    background: #FAEA00;
  }

  .posts .post__card .card__body .post__content .category[data-category=Recargas]::after {
    background: #00AEEF;
  }

  .posts .post__card .card__body .post__content .category[data-category=Tranferência]::after {
    background: #A11AFF;
  }

  .posts .post__card .card__body .post__content .excerpt {
    font-family: "Inter";
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 21px;
    color: #FFFFFF;
    margin-bottom: 0;
    text-align: left;
  }

  .posts .post__card .card__footer {
    padding: 18px;
    display: flex;
    align-items: center;
  }

  .posts .post__card .card__footer .author {
    margin-left: 12px;
  }

  .posts .post__card .card__footer .author .name {
    font-family: "Inter";
    font-style: normal;
    font-weight: 700;
    font-size: 16px;
    line-height: 24px;
    color: #302D3F;
    margin-bottom: 0;
    white-space: nowrap;
  }

  .posts .post__card .card__footer .author .role {
    font-family: "Inter";
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 21px;
    color: #C3C1CA;
    margin-bottom: 0;
    white-space: nowrap;
    text-align: left;
  }

  @media (max-width: 991px) {
    .posts .post:not(:last-child) .post__card {
      margin-bottom: 30px;
    }
  }
    </style>

    <section class="posts posts__single">
      <div class="container">
        <div class="row">
          <?php while ( $postsQuery->have_posts() ) : $postsQuery->the_post(); ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 post">
              <a href="<?php echo get_the_permalink(); ?>" class="post__card">
                <div class="card__body" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $postsQuery->ID ) )[0]; ?>')">
                  <?php include($assets . '/vectors/upload.svg'); ?>
                  <div class="post__content">
                    
                    <h1 class="category" data-category="<?php echo get_the_category()[0]->name; ?>"><?php echo get_the_category()[0]->name; ?></h1>
                    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                  </div>
                </div>
                <div class="card__footer">
                  <img src="<?php echo get_avatar_url($get_author_id, array('size' => 46)); ?>" alt="" style="border-radius: 50%">
                  <div class="author">
                    <p class="name"><?php echo get_author_name(); ?></p>
                    <p class="role"><?php the_author_description(); ?></p>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php
    endif;
    wp_reset_postdata();
  ?>
</div>
<?php get_footer(); ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.forminator-response-message.forminator-success')) {
      document.querySelector('form.forminator-custom-form').classList.add('forminator-submitted');
    }
  })

  const containerMass = 5;
  const mouseMass = 10;

  let mouseX = 0;
  let prevMouseX = 0;
  let mouseXOnDown = null;
  let isMouseDown = false;

  let containerPosition = 0;
  let mouseVelocity = 0;
  let containerVelocity = 0;

  const container = document.querySelector(".casos__categorias__conteudo");





  document.addEventListener("touchstart", () => {
    isMouseDown = true;
  }, false);


  document.addEventListener("touchend", () => {
    isMouseDown = false;
  }, false);


  document.addEventListener("touchmove", event => {
    mouseX = event.changedTouches[0].clientX;
  });
  document.addEventListener("mousemove", event => {
    mouseX = event.pageX;
  }, false);


  document.addEventListener("mousedown", () => {
    isMouseDown = true;
  });

  document.addEventListener("mouseup", () => {
    isMouseDown = false;
  });


  const calculateMouseMomentum = () => {
    if (isMouseDown) {
      if (mouseXOnDown == null) {
        mouseXOnDown = mouseX;
        containerVelocity = 0;
      }

      const distance = mouseX - mouseXOnDown;

      mouseVelocity = mouseX - prevMouseX;
    } else {
      if (mouseXOnDown != null) {
        containerVelocity =
          2 * mouseMass / (mouseMass + containerMass) * mouseVelocity +
          (containerMass - mouseMass) /
          (mouseMass + containerMass) *
          containerVelocity;

        const maxVelocity = 60;

        if (containerVelocity > maxVelocity) {
          containerVelocity = maxVelocity;
        } else if (containerVelocity < -maxVelocity) {
          containerVelocity = -maxVelocity;
        }

        mouseXOnDown = null;
        mouseVelocity = 0;
      }
    }

    prevMouseX = mouseX;
  };

  const updateContainer = () => {
    const boundRight = -container.offsetWidth + window.innerWidth - 85;

    const isOutBound = containerPosition > 0 || containerPosition < boundRight;

    if (!isMouseDown) {
      const mu = 0.04;
      const g = 10;
      const flictionForce = containerMass * g * mu;
      const flictionA = flictionForce / containerMass;

      if (containerVelocity > 0) {
        containerVelocity -= flictionA;
        if (containerVelocity < 0) {
          containerVelocity = 0;
        }
      } else if (containerVelocity < 0) {
        containerVelocity += flictionA;
        if (containerVelocity > 0) {
          containerVelocity = 0;
        }
      }

      if (isOutBound) {
        const k = 0.01;
        const restLength = containerPosition > 0 ? 0 : boundRight;
        const currentLength = containerPosition;
        const dragForce = 1 * k * (restLength - currentLength);

        const dragForceA = dragForce / containerMass;
        containerVelocity += dragForce;

        const nextPosition = containerPosition + containerVelocity;

        if (containerPosition < boundRight && nextPosition > boundRight) {
          containerVelocity = 0;
          containerPosition = boundRight;
        } else if (containerPosition > 0 && nextPosition < 0) {
          containerVelocity = 0;
          containerPosition = 0;
        }
      }
    }

    containerPosition =
      containerPosition +
      containerVelocity +
      (isOutBound ? mouseVelocity / 2 : mouseVelocity);

    container.style.transform = `translate(${containerPosition}px)`;
  };


  const loop = () => {

    calculateMouseMomentum();
    updateContainer();

    window.requestAnimationFrame(() => {
      loop();
    });
  };

  loop();
</script>