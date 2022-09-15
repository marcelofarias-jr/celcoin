<?php $dir = get_template_directory_uri(); ?>

<style>
<?php include(dirname(__FILE__) . '/navbar.css');
?>
</style>

<nav id="navbar"
    class="nav <?php echo !is_front_page() && strpos(get_the_permalink(), 'solucoes') === false ? 'nav--gray' : '' ?>">
    <div class="container">
        <div class="nav__flex">
            <div class="nav__column nav__logo">
                <a class="box-logo" href="<?php echo get_site_url(); ?>" style="text-decoration: none;">

                    <svg width="166" height="48" viewBox="0 0 166 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M56.0918 23.8767C56.0918 18.3779 60.1703 14.2344 65.6325 14.2344C68.6256 14.2344 71.0572 15.4783 72.6289 17.4366C72.8544 17.737 72.8544 18.0018 72.6289 18.2266L70.9444 19.8466C70.646 20.147 70.2702 20.0736 70.047 19.8088C68.9616 18.7162 67.7281 18.0018 65.8182 18.0018C62.3764 18.0018 59.9801 20.4875 59.9801 23.8789C59.9801 27.2703 62.3742 29.8294 65.8911 29.8294C67.7613 29.8294 68.997 29.1128 70.0447 28.0224C70.3056 27.7598 70.6814 27.6842 70.9798 27.9846L72.6642 29.6046C72.8897 29.8316 72.8897 30.0942 72.6642 30.3946C71.0925 32.3529 68.6609 33.5968 65.7055 33.5968C60.2078 33.5946 56.0918 29.4132 56.0918 23.8767Z"
                            fill="#886DFF" />
                        <path
                            d="M74.4629 23.8388C74.4629 18.4157 78.2053 14.2344 83.7803 14.2344C89.2802 14.2344 92.4611 18.4157 92.4611 23.011C92.4611 24.631 92.1251 25.421 90.7391 25.421H78.391C78.8773 28.3584 81.0481 30.3167 84.6778 30.3167C86.4728 30.3167 87.9339 29.865 89.3929 28.8858C89.6184 28.7345 89.8416 28.7723 89.992 28.9993L91.0398 30.4302C91.2652 30.7306 91.1901 30.9576 90.8894 31.258C89.2802 32.8402 86.9237 33.5924 84.3418 33.5924C78.3534 33.5946 74.4629 29.3376 74.4629 23.8388ZM88.869 22.4814C88.6435 19.4683 86.6607 17.6591 83.7803 17.6591C80.9 17.6591 78.7668 19.4305 78.3557 22.4814H88.869Z"
                            fill="#886DFF" />
                        <path
                            d="M95.041 32.5787V6.77617C95.041 6.43792 95.2289 6.21094 95.5649 6.21094H98.558C98.894 6.21094 99.0819 6.43792 99.0819 6.77617V32.5787C99.0819 32.9169 98.894 33.1439 98.558 33.1439H95.5649C95.2289 33.1439 95.041 32.9169 95.041 32.5787Z"
                            fill="#886DFF" />
                        <path
                            d="M101.664 23.8767C101.664 18.3779 105.743 14.2344 111.205 14.2344C114.198 14.2344 116.629 15.4783 118.201 17.4366C118.427 17.737 118.427 18.0018 118.201 18.2266L116.517 19.8466C116.218 20.147 115.842 20.0736 115.619 19.8088C114.534 18.7162 113.3 18.0018 111.39 18.0018C107.949 18.0018 105.552 20.4875 105.552 23.8789C105.552 27.2703 107.946 29.8294 111.463 29.8294C113.334 29.8294 114.569 29.1128 115.617 28.0224C115.878 27.7598 116.254 27.6842 116.552 27.9846L118.237 29.6046C118.462 29.8316 118.462 30.0942 118.237 30.3946C116.665 32.3529 114.233 33.5968 111.278 33.5968C105.78 33.5946 101.664 29.4132 101.664 23.8767Z"
                            fill="#886DFF" />
                        <path
                            d="M119.287 23.9145C119.287 18.4536 123.328 14.2344 128.79 14.2344C134.215 14.2344 138.256 18.4536 138.256 23.9145C138.256 29.3754 134.215 33.5946 128.79 33.5946C123.328 33.5946 119.287 29.3754 119.287 23.9145ZM128.79 29.8271C131.934 29.8271 134.365 27.455 134.365 23.9145C134.365 20.374 131.934 18.0018 128.79 18.0018C125.609 18.0018 123.178 20.374 123.178 23.9145C123.178 27.455 125.609 29.8271 128.79 29.8271Z"
                            fill="#886DFF" />
                        <path
                            d="M140.539 8.35779C140.539 7.07823 141.549 6.02344 142.895 6.02344C144.204 6.02344 145.214 7.07823 145.214 8.35779C145.214 9.67517 144.204 10.73 142.895 10.73C141.549 10.73 140.539 9.67517 140.539 8.35779ZM140.837 15.2496C140.837 14.9113 141.025 14.6844 141.361 14.6844H144.392C144.728 14.6844 144.916 14.9113 144.916 15.2496V32.5759C144.916 32.9141 144.728 33.1411 144.392 33.1411H141.361C141.025 33.1411 140.837 32.9141 140.837 32.5759V15.2496Z"
                            fill="#886DFF" />
                        <path
                            d="M149.182 32.5776V15.2513C149.182 14.9131 149.37 14.6861 149.706 14.6861H152.548C152.884 14.6861 153.072 14.8374 153.072 15.2892L153.223 17.5501C154.27 15.6675 156.103 14.2344 158.985 14.2344C162.876 14.2344 165.646 16.947 165.646 21.8049V32.5776C165.646 32.9159 165.42 33.1429 165.084 33.1429H162.129C161.793 33.1429 161.605 32.9159 161.605 32.5776V22.5593C161.605 19.6597 160.184 18.0018 157.602 18.0018C155.02 18.0018 153.225 19.6597 153.225 22.5593V32.5776C153.225 32.9159 153.037 33.1429 152.701 33.1429H149.708C149.367 33.1429 149.182 32.9159 149.182 32.5776Z"
                            fill="#886DFF" />
                        <path
                            d="M47.4714 24C47.4714 14.3088 41.6555 5.7146 32.8221 2.06509C32.5215 0.878998 31.4627 0 30.1916 0C28.6862 0 27.466 1.22837 27.466 2.74381C27.466 4.25925 28.6862 5.48762 30.1916 5.48762C30.616 5.48762 31.0117 5.38081 31.3698 5.20723C39.0006 8.29152 44.0384 15.6729 44.0384 24C44.0384 34.6103 35.8373 43.3291 25.4367 44.1969V40.2025C30.6713 39.6173 35.2847 36.5152 37.8246 31.8643C39.1951 31.7196 40.2673 30.5669 40.2673 29.1494C40.2673 27.6339 39.047 26.4078 37.5439 26.4078C36.0407 26.4078 34.8183 27.6362 34.8183 29.1494C34.8183 29.4186 34.8691 29.6723 34.9398 29.9171C32.7514 34.1519 28.4364 36.8579 23.6351 36.8579C16.5923 36.8579 10.8626 31.0899 10.8626 24C10.8626 16.9102 16.5923 11.1421 23.6351 11.1421C28.4652 11.1421 32.8045 13.8793 34.9796 18.1586C34.8824 18.4412 34.8183 18.7371 34.8183 19.0531C34.8183 20.5686 36.0385 21.7969 37.5439 21.7969C39.0492 21.7969 40.2673 20.5686 40.2673 19.0531C40.2673 17.6779 39.2593 16.5497 37.9462 16.3516C35.4328 11.5783 30.7531 8.39166 25.4367 7.7975V2.15856C25.4367 2.14298 25.4279 2.12962 25.4279 2.11405C25.4301 2.06954 25.4522 2.03394 25.4522 1.98943C25.4522 1.03477 24.6829 0.262585 23.7368 0.262585C10.6482 0.262585 0 10.9107 0 24C0 33.689 5.81594 42.2854 14.6493 45.9349C14.9499 47.121 16.0088 48 17.2798 48C18.7852 48 20.0054 46.7716 20.0054 45.2562C20.0054 43.7408 18.7852 42.5124 17.2798 42.5124C16.8554 42.5124 16.4597 42.6192 16.1016 42.7928C8.4708 39.7085 3.43297 32.3293 3.43297 24C3.43297 13.4008 11.6186 4.68651 22.0037 3.80529V7.7708C13.8314 8.59639 7.42964 15.5594 7.42964 24.0022C7.42964 32.4451 13.8314 39.4081 22.0037 40.2337V46.0484C22.0037 47.0031 22.773 47.7775 23.7191 47.7775C23.8009 47.7775 23.8717 47.7419 23.9512 47.7307C36.9382 47.6106 47.4714 37.0181 47.4714 24Z"
                            fill="#886DFF" />
                    </svg>



                </a>

                <button class="nav__burger hidden-lg">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="nav__column nav__menu">
                <ul>
                    <li>

                        <a href="javascript:void(0);" data-dropdown-handler="solucoes" id="setinhaum"
                            class="accordion-header">
                            Soluções
                            <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down.svg'); ?>
                        </a>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/sobre">Sobre nós</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/casos">Caso de uso</a></li>
                    <li>
                        <a href="javascript:void(0);" data-dropdown-handler="developer" id="setinhadois">
                            Developer
                            <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down.svg'); ?>
                        </a>
                    </li>
                    <li><a href="<?php echo get_site_url(); ?>/contato">Contato</a></li>
                    <li><a href="https://news.celcoin.com.br/" target="_blank">News</a></li>
                    <li>
                        <a href="https://openfinance.celcoin.com.br/dashboard" class="nav__button" id="loginButton"
                            target="_blank">
                            <span class="user">
                                <?php include(dirname(__FILE__, 2) . '/assets/vectors/user.svg'); ?>
                            </span>
                            <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down-rounded.svg'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <span class="hand-vector hidden-lg">
            <?php include(dirname(__FILE__, 2) . '/assets/vectors/hand.svg'); ?>
        </span>
    </div>
</nav>

<div class="nav__apis" data-dropdown="solucoes">
    <div class="container">
        <div
            class="nav__flex <?php echo !is_front_page() && strpos(get_the_permalink(), 'solucoes') === false ? 'nav__flex--gray' : '' ?>">
            <div class="nav__column hidden-sm">
                <p class="title">Infraestrutura de tecnologia financeira e bancária em um único lugar.</p>
                <a href="#" class="button button--default" data-open-contact>
                    Solicitar API
                    <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down.svg'); ?>
                </a>
            </div>
            <hr class="hr-top hidden-lg" />
            <div class="nav__column nav__menu-inner">
              <p class="heading">Conheça nossas APIs</p>

              <div class="scroller">
                <?php 
                  $parent_page = 89;
                  $args = array(
                    "depth" => 0,
                    "parent" => $parent_page,
                    "include" => $parent_page
                  );

                  $args['child_of'] = $args['include'];
                  unset($args['include']);
                  $pages = get_pages($args);

                  if ( $pages ) :
                ?>
                  <ul>
                    <?php foreach ( $pages as $page ) : ?>
                      <li>
                        <a href="<?php echo get_permalink($page->ID); ?>">
                          <img src="<?php echo get_field('logo_categoria', $page->ID)['url']; ?>" alt="<?php echo get_field('logo_categoria', $page->ID)['alt']; ?>">
                          <?php echo $page->post_title; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </div>

              <a href="<?php echo get_site_url() . '/solucoes' ?>" class="button button--outlined button--small">
                  Conheça todas as nossas APIs
                  <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down.svg'); ?>
              </a>
            </div>
            <hr class="hr-bottom hidden-lg">
            <div class="nav__column hidden-lg">
                <p class="title">Infraestrutura de tecnologia financeira e bancária em um único lugar.</p>
                <a href="javascript:void(0);" class="button button--default" data-open-contact>
                    Solicitar API
                    <?php include(dirname(__FILE__, 2) . '/assets/vectors/chevron-down.svg'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="nav__apis nav__apis--small" data-dropdown="developer">
    <div class="container">
        <div class="nav__flex <?php echo !is_home() ? 'nav__flex--gray' : '' ?>">
            <div class="nav__column hidden-sm">
                <p class="title">Praticidade para realizar integrações com nossas APIs.</p>
            </div>
            <hr class="hr-top hidden-lg">
            <div class="nav__column nav__menu-inner">
                <p class="heading">Veja como é simples começar:</p>

                <ul>
                    <li><a href="https://developers.celcoin.com.br/docs">Documentação das APIs</a></li>
                    <li><a href="https://developers.celcoin.com.br/reference/integrando-na-celcoin">Referência das
                            APIs</a></li>
                    <li><a href="https://developers.celcoin.com.br/">Change log das APIs</a></li>
                </ul>
            </div>
            <hr class="hr-bottom hidden-lg">
            <div class="nav__column hidden-lg">
                <p class="title">Praticidade para realizar integrações com nossas APIs.</p>
            </div>
        </div>
    </div>
</div>

<div id="nav-backdrop" class="nav__backdrop"></div>

<script>
<?php include(dirname(__FILE__) . '/navbar.js'); ?>
</script>

<script>
var lastScrollTop = 0;
var isHome = <?php echo !is_front_page() && strpos(get_the_permalink(), 'solucoes') === false; ?>

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.
window.addEventListener("scroll", function() { // or window.addEventListener("scroll"....
    if (window.innerWidth >= 992) {
        var st = window.pageYOffset || document.documentElement
            .scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"

        if (isHome !== 1 && st === 0) {
            return document.querySelector('.nav').classList.remove('nav--gray');
        }

        if (st > lastScrollTop) {
            // downscroll code
            document.querySelector('.nav').classList.remove('nav--gray');
            document.querySelector('.nav').classList.add('opacity')
            document.querySelector('.nav__apis').classList.add('opacity')
        } else {
            document.querySelector('.nav').classList.remove('opacity')
            document.querySelector('.nav__apis').classList.remove('opacity')
            document.querySelector('.nav').classList.add('nav--gray');
            // upscroll code
        }

        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
    }
}, false);
</script>