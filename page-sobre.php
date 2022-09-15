<?php
/*
* Template name: Sobre
*/
get_header();
$dir = get_template_directory_uri();
$banner = get_field('banner_sobre');
$companhia = get_field('companhia_sobre');
$jornada = get_field('jornada_sobre');
$equipe = get_field('equipe_sobre');
?>

<style>
  .sobre .hero {
    padding: 80px 0 80px;
  }

  .sobre .hero .banner {
    width: 100%;
    height: 580px;
    border-radius: 10px;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 7rem;
  }

  .sobre .hero .banner .content {
    text-align: center;
  }

  .sobre .hero .banner .content .title {
    max-width: 849px;
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 700;
    font-size: 64px;
    line-height: 105%;
    text-align: center;
    color: #FFFFFF;
    margin-bottom: 38px;
  }

  .sobre .hero .banner .content .description {
    font-family: "Inter";
    font-style: normal;
    font-weight: 700;
    font-size: 20px;
    line-height: 30px;
    text-align: center;
    color: #FFFFFF;
    margin-bottom: 17px;
  }

  .sobre .hero .banner .content .button {
    margin: 0 auto;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
  }

  .sobre .hero .banner .content .button svg {
    transform: rotate(0) translateX(2px);
  }

  @media (max-width: 991px) {
    .sobre .hero {
      padding: 0;
    }

    .sobre .hero .container {
      padding: 0;
      max-width: initial;
      width: 100%;
    }

    .sobre .hero .banner {
      border-radius: 0;
      height: auto;
      padding: 40px 0 !important;
    }

    .sobre .hero .banner .content .title {
      font-weight: 700;
      font-size: 32px;
      max-width: 285px;
      margin-bottom: 15px;
    }

    .sobre .hero .banner .content .description {
      display: none;
    }

    .sobre .hero .banner .content .button {
      width: 40px;
      height: 40px;
      padding: 14px;
    }
  }

  .sobre .company {
    background-color: #806DFB;
    padding: 98px 0 0;
    background-size: cover;
    background-position: bottom center;
    background-repeat: no-repeat;
  }

  .sobre .company .title {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 600;
    font-size: 48px;
    line-height: 60px;
    color: #FFFFFF;
    margin-bottom: 65px;
    position: relative;
    display: table;
  }

  .sobre .company .title::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0.97%, #49FADE 41.2%, rgba(73, 250, 222, 0) 100%);
    border-radius: 100px;
  }

  .sobre .company .content {
    font-family: "Inter";
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    color: #FFFFFF;
    margin-bottom: 22px;
  }

  .sobre .company p {
    font-family: "Inter";
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 30px;
    color: #FFFFFF;
    margin-bottom: 22px;
  }

  .sobre .company .company__details {
    margin-bottom: 115px;
  }

  .sobre .company .company__details img {
    margin-bottom: 30px;
  }

  .sobre .company .company__details .large-image {
    width: 100%;
    border-radius: 10px;
    height: 324px;
    -o-object-fit: cover;
    object-fit: cover;
  }

  .sobre .company .company__details .small-image {
    width: 100%;
    border-radius: 10px;
    height: 324px;
  }

  .sobre .company .company__details .hidden-lg .large-image {
    height: 191px;
    width: 100%;
    -o-object-fit: cover;
    object-fit: cover;
  }

  .sobre .company .company__details .hidden-lg .flex {
    display: flex;
    width: 100%;
  }

  .sobre .company .company__details .hidden-lg .small-image {
    width: calc(50% - 7.5px);
    height: auto;
  }

  .sobre .company .company__details .hidden-lg .small-image:first-child {
    margin-right: 7.5px;
  }

  .sobre .company .company__details .hidden-lg .small-image:last-child {
    margin-left: 7.5px;
  }

  .sobre .company .journey .button {
    margin-top: 22px;
  }

  .sobre .company .team {
    margin-top: 118px;
  }

  .sobre .company .team .all-images {
    background: #fff;
    border-radius: 10px;
    border: 4px solid #fff;
    width: 100%;
    height: auto;
  }

  @media (max-width: 991px) {
    .sobre .company {
      padding: 42px 22px 0;
    }

    .sobre .company .container {
      padding: 0;
    }

    .sobre .company .title {
      font-size: 30px;
      line-height: 42px;
      margin-bottom: 30px;
    }

    .sobre .company .title::after {
      /* bottom: -5px; */
    }

    .sobre .company .content {
      font-size: 16px;
      line-height: 24px;
      margin-bottom: 40px;
    }

    .sobre .company .team {
      margin-top: 62px;
    }

    .sobre .company .photos__wrapper .photos {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .sobre .company .photos__wrapper .photos-2 {
      display: none;
    }

    .sobre .company .photos__wrapper .photos-2.active {
      display: flex;
    }

    .sobre .company .photos__wrapper .photos .photo {
      flex: 0 0 calc(20% - 15px);
      margin-bottom: 15px;
      width: 160px;
      height: auto;

    }

    .sobre .company .photos__wrapper .button {
      margin: 0 auto;
      font-size: 20px;
      margin-top: 40px;
      display: table;
    }
  }
  @media (max-width: 400px) {
    .sobre .company .photos__wrapper .photos {
      margin: 1px solid blue;
    }
  }

  .sobre .history {
    background: #49FADE;
    padding: 140px 0;
  }

  .sobre .history .card {
    background: #FDFDFD;
    box-shadow: 0px 57px 91px -37px rgba(26, 14, 75, 0.3);
    border-radius: 20px;
    border: none;
    padding: 0 64px 69px;
  }

  @media (max-width: 991px) {
    .sobre .history .card {
      padding: 0 38px 69px;
    }
  }

  .sobre .history .card .years__carousel {
    margin-bottom: 62px;
  }

  .sobre .history .card .years__carousel .year {
    margin: 0 40px;
  }

  .sobre .history .card .years__carousel .year span {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 700;
    font-size: 48px;
    line-height: 60px;
    color: #C3C1CA;
    padding: 81px 0 68px;
    display: block;
    background: transparent;
    text-align: center;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
  }

  .sobre .history .card .years__carousel .year span::after {
    content: "";
    position: absolute;
    bottom: -47px;
    left: 50%;
    transform: translateX(-50%) translateZ(0);
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 200px 100px 200px;
    border-color: transparent transparent #FDFDFD transparent;
  }

  .sobre .history .card .years__carousel .year.slick-current span {
    background: #806DFB;
    color: #FDFDFD;
  }

  .sobre .history .card .years-content__carousel .year .flex {
    display: flex;
    max-width: 858px;
    margin: 0 auto;
    justify-content: space-between;
    align-items: center;
    position: relative;
    margin-bottom: 28px;
  }

  .sobre .history .card .years-content__carousel .year .flex::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 2px;
    height: 100%;
    background: #DDE9EF;
  }

  .sobre .history .card .years-content__carousel .year .flex .flex__column {
    width: 50%;
  }

  .sobre .history .card .years-content__carousel .year .flex .flex__column:first-child {
    margin-right: 218px;
  }

  .sobre .history .card .years-content__carousel .year .flex .flex__column img {
    margin-bottom: 20px;
  }

  .sobre .history .card .years-content__carousel .year .flex .flex__column .paragraph {
    font-family: "Urbanist";
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 32px;
    color: #1E1360;
    max-width: 331px;
  }

  .sobre .history .card .years-content__carousel .year .flex.flex__single::after {
    display: none;
  }

  .sobre .history .card .years-content__carousel .year .flex.flex__single .flex__column {
    width: 100%;
    margin: 0;
  }

  .sobre .history .card .years-content__carousel .year .flex.flex__single .flex__column img {
    display: block;
    margin: 0 auto 20px;
  }

  .sobre .history .card .years-content__carousel .year .flex.flex__single .flex__column .paragraph {
    display: block;
    margin: 0 auto;
    text-align: center;
  }

  @media (max-width: 991px) {
    .sobre .history .card .years-content__carousel .year .flex {
      display: block;
      padding-bottom: 50px;
    }

    .sobre .history .card .years-content__carousel .year .flex::after {
      display: none;
    }

    .sobre .history .card .years-content__carousel .year .flex .flex__column {
      margin-bottom: 30px;
      width: 100%;
      margin: 0 auto;
      display: block;
    }

    .sobre .history .card .years-content__carousel .year .flex .flex__column .paragraph {
      max-width: 100%;
      margin-bottom: 60px;
    }
  }

  .sobre .history .card .years-content__carousel .arrow {
    width: 79px;
    height: 79px;
    border-radius: 50%;
    padding: 0;
    position: absolute;
    bottom: -30px;
    right: 0;
  }

  .sobre .history .card .years-content__carousel .arrow svg {
    margin: 0;
    transform: scale(3);
  }

  .sobre .history .card .years-content__carousel .arrow--prev {
    right: 107px;
  }

  .sobre .history .card .years-content__carousel .arrow--prev svg {
    transform: scale(3) rotate(90deg) !important;
  }

  .sobre .history .card .years-content__carousel .arrow--next svg {
    transform: scale(3) rotate(-90deg) !important;
  }

  @media (max-width: 991px) {
    .sobre .history .card .years-content__carousel .arrow {
      width: 48px;
      height: 48px;
    }

    .sobre .history .card .years-content__carousel .arrow--prev {
      right: 64px;
    }

    .sobre .history .card .years-content__carousel .arrow--prev svg {
      transform: scale(2) rotate(90deg) !important;
    }

    .sobre .history .card .years-content__carousel .arrow--next svg {
      transform: scale(2) rotate(-90deg) !important;
    }
  }

  .sobre .history .card .years-content__carousel .arrow.slick-disabled {
    background: transparent;
    border: 1px solid #E6E5EA;
  }

  .sobre .history .card .years-content__carousel .arrow.slick-disabled svg path {
    fill: #E6E5EA;
  }

  .sobre .history .card .years-content__carousel .arrow.slick-disabled:hover {
    background: transparent !important;
    border: 1px solid #E6E5EA !important;
  }

  .sobre .history .card .years-content__carousel .arrow.slick-disabled:hover svg path {
    fill: #E6E5EA !important;
  }

  .sobre .history .card .years-content__carousel .slick-dots {
    list-style-type: none;
    position: absolute;
    bottom: -150px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .sobre .history .card .years-content__carousel .slick-dots li {
    font-size: 0;
  }

  .sobre .history .card .years-content__carousel .slick-dots li button::before {
    background: rgba(0, 0, 0, 0.45);
    width: 12px;
    height: 12px;
    font-size: 0;
    border-radius: 50%;
  }

  .sobre .history .card .years-content__carousel .slick-dots li.slick-active button {
    width: 30px;
  }

  .sobre .history .card .years-content__carousel .slick-dots li.slick-active button::before {
    border-radius: 30px;
    background: #806DFB;
  }
</style>

<div class="sobre">
  <section class="hero">
    <div class="container">
      <div class="banner" style="background-image: url('<?php echo $banner['banner_img']['url']; ?>')">
        <div class="content">
          <h1 class="title"><?php echo $banner['banner_titulo']; ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="company" style="background-image: url('<?php echo $dir . '/assets/img/back-sobre.png'; ?>')">
    <div class="container">
      <div class="company__details">
        <h1 class="title"><?php echo $companhia['companhia_titulo']; ?></h1>

        <div class="row">
          <div class="col-sm-12 col-md-8" class="content">
            <?php echo $companhia['companhia_texto']; ?>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="small-image hidden-sm" src="<?php echo $companhia['companhia_img_top']['url']; ?>" alt="">
            <div class="hidden-lg">
              <img class="large-image" src="<?php echo $dir . '/assets/img/about/sobre3.jpg' ?>" alt="">
              <div class="flex">
                <img class="small-image" src="<?php echo $dir . '/assets/img/about/sobre3.jpg' ?>" alt="">
                <img class="small-image" src="<?php echo $dir . '/assets/img/about/sobre2.jpg' ?>" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-8 hidden-sm">
            <img class="large-image" src="<?php echo $companhia['companhia_img_lg']['url']; ?>" alt="">
          </div>
          <div class="col-sm-12 col-md-4 hidden-sm">
            <img class="small-image" src="<?php echo $companhia['companhia_img_btt']['url']; ?>" alt="">
          </div>
        </div>
      </div>
      <div class="journey">
        <h1 class="title"><?php echo $jornada['jornada_titulo']; ?></h1>
        <div class="row">
          <?php while (have_rows('jornada_sobre')) : the_row(); ?>
            <?php while (have_rows('jornada_paragrafo')) : the_row();
              $paragrafo = get_sub_field('paragrafo');
            ?>
              <div class="col-sm-12 col-md-6">
                <p class="content"><?php echo $paragrafo; ?></p>
              </div>
            <?php endwhile; ?>
          <?php endwhile; ?>
        </div>
        <a href="<?php echo $jornada['jornada_botao']['url']; ?>" class="button button--green" target="_blank">
        <?php echo $jornada['jornada_botao']['title']; ?>
          <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z" fill="#27176C" />
          </svg>
        </a>
      </div>

      <div class="team">
        <h1 class="title"><?php echo $equipe['equipe_titulo']; ?></h1>
        <img class="all-images hidden-sm" src='<?php echo $equipe['equipe_img_dsk']['url']; ?>'>
        <div class="photos__wrapper">

          <div class="photos hidden-lg">
            <?php while (have_rows('equipe_sobre')) : the_row(); ?>
              <?php while (have_rows('equipe_img_mbl_open')) : the_row();
                $img = get_sub_field('imagem');
              ?>
                <div class="photo">
                  <img src='<?php echo $img['url']; ?>'>
                </div>
              <?php endwhile; ?>
            <?php endwhile; ?>
          </div>


          <a href="javascript:void(0);" class="hidden-lg button button--green" onClick="document.getElementById('photos-2').classList.toggle('active'); this.style.display = 'none'">
            Ver toda equipe
            <?php include(dirname(__FILE__) . '/assets/vectors/chevron-down.svg'); ?>
          </a>

          <?php while (have_rows('equipe_sobre')) : the_row(); ?>
            <div class="photos photos-2 hidden-lg" id="photos-2">
              <?php while (have_rows('equipe_img_mbl_close')) : the_row();
                $img = get_sub_field('imagem');
              ?>
                <div class="photo">
                  <img src='<?php echo $img['url']; ?>'>
                </div>
              <?php endwhile; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </div>

    </div>
    <?php include(dirname(__FILE__) . '/template-parts/big-numbers-single/big-numbers.php'); ?>
  </section>

  <?php
  include(dirname(__FILE__) . '/template-parts/potential/potential.php');
  include(dirname(__FILE__) . '/template-parts/market/market.php');
  ?>

  <!--<section class="history">
    <div class="container">
      <div class="card">
        <div class="years__carousel">
          <div class="year">
            <span>2017</span>
          </div>
          <div class="year">
            <span>2018</span>
          </div>
          <div class="year">
            <span>2019</span>
          </div>
          <div class="year">
            <span>2020</span>
          </div>
          <div class="year">
            <span>2021</span>
          </div>
          <div class="year">
            <span>2022</span>
          </div>
        </div>

        <div class="years-content__carousel">
          <div class="year">
            <div class="flex">
              <div class="flex__column">
                <img src="<?php echo $dir . '/assets/img/about/seedstars.png'; ?>" alt="">
                <p class="paragraph">Prêmio de Melhor Startup do Brasil na Seedstars World Competition.
                </p>
              </div>
              <div class="flex__column">
                <img src="<?php echo $dir . '/assets/img/about/bbva.png'; ?>" alt="">
                <p class="paragraph">Prêmio de Melhor Fintech do Brasil na BBVA Open Talent.</p>
              </div>
            </div>
          </div>
          <div class="year">
            <div class="flex flex__single">
              <div class="flex__column">
                <img src="<?php echo $dir . '/assets/img/about/100startups.jpg'; ?>" alt="">
                <p class="paragraph">Listada pela primeira vez, nas 100 Startups to Watch pela revista
                  Pequenas Empresas & Grandes Negócios.</p>
              </div>
            </div>
          </div>
          <div class="year">
            <span></span>
          </div>
          <div class="year">
            <span></span>
          </div>
          <div class="year">
            <span></span>
          </div>
          <div class="year">
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <?php include(dirname(__FILE__) . '/template-parts/sales/sales.php'); ?>
</div>
<?php get_footer(); ?>

<script>
  var years = $(".years__carousel");
  var yearsContent = $(".years-content__carousel");

  years.slick({
    dots: false,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode: false,
    arrows: false,
    drag: false,
    responsive: [{
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false
        }
      },
    ]
  });

  yearsContent.slick({
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    arrows: true,
    drag: false,
    fade: true,
    prevArrow: "<button type='button' class='arrow arrow--prev button button--default'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",
    nextArrow: "<button type='button' class='arrow arrow--next button button--default'><div><svg width='11' height='6' viewBox='0 0 11 6' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M5.7437 3.87852L9.4562 0.166016L10.5167 1.22652L5.7437 5.99952L0.970703 1.22652L2.0312 0.166016L5.7437 3.87852Z' fill='#27176C'/></svg></div></button>",
    easing: 'ease-in-out',
    responsive: [{
      breakpoint: 991,
      settings: {
        dots: true
      }
    }]
  });

  yearsContent.on('afterChange', function() {
    years.slick('slickGoTo', yearsContent.slick('slickCurrentSlide'));
  })
</script>