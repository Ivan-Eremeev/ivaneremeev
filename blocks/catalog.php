<?php 
  while ( have_rows('jobs') ) : the_row();
    if ( get_sub_field('title') ):
    ?>
      <div class="wrapper">
        <div class="head">
          <h1 class="head_title"><?php the_sub_field('title') ?></h1>
          <div class="head_subtitle"><?php the_sub_field('subtitle') ?></div>
        </div>
      <?php
    endif;
    ?>
      <div class="catalog">
        <div class="row">
          <?php 
            if ( have_rows('job-loop') ):
              while ( have_rows('job-loop') ) : the_row();
                ?>
                  <div class="catalog_col" data-aos="fade-up" data-aos-duration="1000">
                    <a class="card" href="<?php the_sub_field('link') ?>" target="_blank">
                    <span class="card_img img-responsive">
                      <img src="<?php the_sub_field('image') ?>" alt="">
                      <span class="card_overlay">
                        <span class="card_text"><?php the_sub_field('text') ?></span>
                      </span>
                      </span>
                    </a>
                  </div>
                <?php
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  <?php
  endwhile;
?>