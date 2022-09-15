<footer class="container-fluid">
  <section class="container logo">
    <a href="<?php echo get_site_url() ?>">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Logo Celcoin" style="height: 59px; width: 203px;">
    </a>
    <div class="logos">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/certificações.png">
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/Barueri-e-Região-2021.png">
    </div>
  </section>

  <hr class="separador" />
    
  <section class="container conteudo">
    <div class="row">
      <div class="col-lg-6">
        <div class="container_solucoes">
          <div class="row">
            <div class="col">
              <h3>Soluções</h3>
            </div>
          </div>
          <div class="row">
            <?php
              $count = 0;
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
              <?php
                foreach ( $pages as $page ) :
                  $count++;

                  $subargs = array(
                    "depth" => 0,
                    "parent" => $page->ID,
                    "include" => $page->ID
                  );

                  $subargs['child_of'] = $subargs['include'];
                  unset($subargs['include']);
                  $subpages = get_pages($subargs);

                  if ( $subpages && isset($subpages) && count($subpages) !== 0 ) :
              ?>
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="false"
                          aria-controls="collapse<?php echo $count; ?>">
                          <?php echo $page->post_title; ?><i class="arrow down"></i>
                      </button>
                    </h2>
                    <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse"
                      aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionFooter">
                      <div class="accordion-body">
                        <?php foreach ( $subpages as $subpage ) : ?>
                          <div class="accordion-link">
                            <a href="<?php echo get_the_permalink($subpage->ID); ?>">
                              <?php echo $subpage->post_title; ?>
                            </a>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php else : ?>
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <a class="accordion-button collapsed" type="button" href="<?php echo get_the_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a>
                    </h2>
                  </div>
                </div>
              <?php endif; endforeach; ?>
            <?php endif; ?>                        
          </div>
       </div>
      </div>

      <div class="col second">
        <?php if ( have_rows('footer_coluna', 'option') ) : ?>
          <div class="row container_seccoes">
            <?php while ( have_rows('footer_coluna', 'option') ) : the_row(); ?>
              <div class="col-sm-12 col-md-4">
                <div class="container_seccao">
                  <h4><?php echo get_sub_field('titulo'); ?></h4>
                  <?php 
                    if ( have_rows('links') ) :
                      while ( have_rows('links') ) : the_row();
                  ?>
                    <a href="<?php echo get_sub_field('link')['url']; ?>" target="<?php echo get_sub_field('link')['target']; ?>">
                      <?php echo get_sub_field('link')['title']; ?>
                    </a>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

      <?php if ( have_rows('footer_linhas', 'option') ) : ?>
        <div class=" row" id="containerCompartilhamento">
          <?php $countR = 0; while ( have_rows('footer_linhas', 'option') ) : the_row(); $countR++; ?>
            <?php if ( get_row_layout() === 'multiplos_links' ) : ?>
              <div class="col-sm-12 col-md-6">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingCompartilhamento">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseCompartilhamento" aria-expanded="true"
                      aria-controls="collapseCompartilhamento">
                      <?php echo get_sub_field('titulo'); ?><i class="arrow down"></i>
                    </button>
                  </h2>
                  <div id="collapseCompartilhamento" class="accordion-collapse collapse"
                    aria-labelledby="headingCompartilhamento" data-bs-parent="#accordionFooter">
                    <div class="accordion-body">
                      <?php
                        if ( have_rows('links') ) :
                          while ( have_rows('links') ) :
                            the_row();
                      ?>
                        <a href="<?php echo get_sub_field('link')['url']; ?>" target="<?php echo get_sub_field('link')['target']; ?>">
                          <?php echo get_sub_field('link')['title']; ?>
                        </a>
                      <?php endwhile; endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php else : ?>
              <div class="col-sm-12 col-md-5 offset-md-1">
                <div class="container_caso">
                  <h4 style="cursor: pointer;" onClick="window.location.href='<?php echo get_sub_field('link')['url']; ?>">
                    <?php echo get_sub_field('link')['title']; ?>
                  </h4>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>
          
        </div>
      <?php endif; ?>
    </div>
  </section>

  <hr class="separador" />

  <section class="container-fluid rodape">
    <div class="row">
      <div class="col-sm-6">
        <p><?php echo get_field('footer_disclaimer', 'option'); ?></p>
      </div>
      <div class="col-sm-6">
        <div class="container_rodape">
          <?php if ( get_field('footer_cookies', 'option')['url'] ) : ?>
            <div class="cookies">
              <a href="<?php echo get_field('footer_cookies', 'option')['url']; ?>" target="<?php echo get_field('footer_cookies', 'option')['target']; ?>">
                <?php echo get_field('footer_cookies', 'option')['title']; ?>
              </a>
            </div>
          <?php endif; ?>

          <?php if ( get_field('footer_privacidade', 'option')['url'] ) : ?>
            <div class="privacidade">
              <a href="<?php echo get_field('footer_privacidade', 'option')['url']; ?>" target="<?php echo get_field('footer_privacidade', 'option')['target']; ?>">
                <?php echo get_field('footer_privacidade', 'option')['title']; ?>
              </a>
            </div>
          <?php endif; ?>

          <div class="d-none d-xl-block">
            <a href="<?php echo get_field('linkedin', 'option')['url']; ?>" target="<?php echo get_field('linkedin', 'option')['target']; ?>">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/link-icn.png" alt="Icone Linkedin">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <hr class="separador" />
  
  <section class="container-fluid rodape  d-xl-none">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <div class="link__mobile d-xl-none">
          <a href="<?php echo get_field('linkedin', 'option')['url']; ?>">
            <h3>Conecte-se</h3>
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/link-icn.png" alt="Icone Linkedin">
          </a>
        </div>
      </div>
    </div>
  </section>
</footer>

