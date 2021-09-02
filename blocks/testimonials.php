<?php 
  while ( have_rows('testimonials') ) : the_row();
    ?>
      <div class="wrapper">
        <div class="testimonials">
          <?php if (get_sub_field('title')) { ?>
            <div class="head" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="head_title"><?php the_sub_field('title') ?></h2>
              <div class="head_subtitle"><?php the_sub_field('subtitle') ?></div>
            </div>
          <?php } ?>
          <div class="testimonials_slider">
            <?php 
              if ( have_rows('testimonials__loop') ):
                while ( have_rows('testimonials__loop') ) : the_row();
                  ?>
                    <div class="testimonials_slide">
                      <div class="testimonials_text"><?php the_sub_field('text') ?></div>
                      <a href="<?php the_sub_field('link') ?>" target="_blank">
                        <?php if (get_sub_field('photo')) { ?>
                          <img class="testimonials_avatar" data-lazy="<?php the_sub_field('photo') ?>" alt="">
                        <?php } else { ?>
                          <img class="testimonials_avatar" data-lazy="<?php esc_attr_e(get_template_directory_uri() . '/assets/img/testimonials/no_foto_b.png','ivaneremeev'); ?>" alt="">
                        <?php } ?>
                      </a>
                      <div class="testimonials_name"><a href="<?php the_sub_field('link') ?>" target="_blank"><?php the_sub_field('name') ?></a></div>
                    </div>
                  <?php
                endwhile;
              endif;
            ?>
          </div>
          <div class="testimonials_controlls"></div>
        </div>
      </div>
    <?php
  endwhile;
?>