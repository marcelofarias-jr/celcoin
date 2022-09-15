<?php
/*
* Template name: Casos - Detalhes
*/
get_header();
$dir = get_template_directory_uri();
$assets = dirname(__FILE__) . '/assets';
$foto01 = get_field('foto_destaque');

$primaryPostId = $post->ID;
?>

<style>
  .casos__detalhes .hero {
    padding: 170px 0 70px;
    background: #806DFB;
  }

  .casos__detalhes .hero .heading {
    font-family: "Inter";
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 30px;
    color: #49FADE;
    margin-bottom: 16px;
  }

  .casos__detalhes .hero li {
    list-style: none;
  }

  .casos__detalhes .hero ul {
    margin: 0;
    padding: 0;
  }

  .casos__detalhes .hero a {
    text-decoration: none;
    font-family: "Inter";
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 30px;
    color: #49FADE;
    margin-bottom: 16px;
  }

  .casos__detalhes .hero .title {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 400;
    font-size: 48px;
    line-height: 60px;
    color: #FFFFFF;
  }

  .casos__detalhes .hero .image {
    max-width: 530px;
    -o-object-fit: cover;
    object-fit: cover;
    height: auto;
    border-radius: 20px;
  }

  .casos__detalhes .content {
    padding: 70px 0;
  }

  .casos__detalhes .content h2 {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 32px;
    color: #1E1360;
    margin-bottom: 30px;
  }

  .casos__detalhes .content h3 {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 700;
    font-size: 22px;
    line-height: 32px;
    color: #1E1360;
    margin-bottom: 30px;
  }

  .casos__detalhes .content p {
    font-family: "Inter";
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    color: #1E1360;
    margin-bottom: 81px;
    display: block;
  }

  .casos__detalhes .content figure.alignright {
    float: right;
    margin-left: 60px;
  }

  .casos__detalhes .content figure.alignright img {
    min-width: 620px;
    height: auto;
  }

  .casos__detalhes .content figure.alignright::after {
    content: "";
    display: block;
    clear: both;
  }

  .casos__detalhes .content figure.aligncenter {
    display: block;
    width: 100%;
  }

  .casos__detalhes .content figure.aligncenter img {
    display: block;
    margin: 0 auto;
  }

  .casos__detalhes .content blockquote p {
    font-family: "Inter";
    font-style: italic;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    display: flex;
    align-items: center;
    color: #9490A3;
    padding-left: 22px;
    position: relative;
  }

  .casos__detalhes .content blockquote p::after {
    content: "";
    background: #806DFB;
    border-radius: 100px;
    width: 5px;
    height: calc(100% + 30px);
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
  }

  @media (max-width: 991px) {
    .casos__detalhes .hero .title {
      font-size: 38px;
      line-height: 46px;
      margin-bottom: 30px;
    }

    .casos__detalhes .hero img {
      width: 100%;
      height: auto;
      display: block;
    }

    .casos__detalhes .content {
      padding: 70px 0 20px;
    }

    .casos__detalhes .content h2 {
      font-size: 22px;
      line-height: 30px;
    }

    .casos__detalhes .content p {
      font-size: 16px;
      line-height: 24px;
      margin-bottom: 50px;
    }

    .casos__detalhes .content p mark {
      display: none;
    }

    .casos__detalhes .content figure.alignright {
      float: initial;
      margin-left: 0;
      width: 100%;
      display: block;
    }

    .casos__detalhes .content figure.alignright img {
      min-width: initial;
      width: 100%;
    }

    .casos__detalhes .content figure.aligncenter {
      display: block;
      width: 100%;
    }

    .casos__detalhes .content figure.aligncenter img {
      display: block;
      margin: 0 auto;
      width: 100%;
      height: auto;
    }

    .casos__detalhes .content blockquote p {
      font-weight: 400;
      font-size: 16px;
      line-height: 24px;
    }
  }

  .posts {
    padding: 80px 0;
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
  }

  @media (max-width: 991px) {
    .posts .post:not(:last-child) .post__card {
      margin-bottom: 30px;
    }
  }
</style>

<div class="casos__detalhes">
  <header class="hero">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6" style="display: flex; justify-content: center; align-items: center;">
          <div>
            <p class="heading"><?php the_category(); ?></p>
            <h1 class="title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
          <?php the_post_thumbnail();	 ?>
        </div>
      </div>
    </div>
  </header>

  <section class="content">
    <div class="container">
      <?php echo get_the_content(); ?>
    </div>
  </section>

  <?php
    $postsQuery = new WP_Query(array(
      'orderby' => 'rand',
      'posts_per_page' => 4
    ));

    if ( $postsQuery->have_posts() ) :
      $get_author_id = get_the_author_meta('ID');
  ?>
    <section class="posts posts__single">
      <div class="container">
        <h1 class="title">Recursos que ajudam você a <strong>crescer</strong></h1>
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