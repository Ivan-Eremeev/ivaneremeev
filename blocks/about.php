<?php 
  while ( have_rows('about') ) : the_row();
    ?>
      <div class="wrapper">
        <?php if (get_sub_field('title')) { ?>
          <div class="head">
            <h1 class="head_title"><?php the_sub_field('title') ?></h1>
            <div class="head_subtitle"><?php the_sub_field('subtitle') ?></div>
          </div>
        <?php } ?>
        <div class="about" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <?php if (get_sub_field('photo')) { ?>
            <div class="about_img"><img src="<?php the_sub_field('photo') ?>" alt="photo"></div>
          <?php } ?>
          <div class="about_lists">
            <ul class="about_list">
              <?php 
                if ( have_rows('left_list') ):
                  while ( have_rows('left_list') ) : the_row();
                    ?>
                      <li>
                        <span><?php the_sub_field('name') ?> :</span>
                        <?php if (get_sub_field('checkbox')) {
                          $link = get_sub_field('link'); ?>
                          <a href="<?php esc_url($link['url'],'ivaneremeev'); ?>" target="<?php esc_attr_e($link['target'],'ivaneremeev'); ?>"><?php esc_html_e($link['title'],'ivaneremeev'); ?></a>
                        <?php } else {
                          the_sub_field('text');
                        } ?>
                      </li>
                    <?php
                  endwhile;
                endif;
              ?>
            </ul>
            <ul class="about_list">
              <?php 
                if ( have_rows('right_list') ):
                  while ( have_rows('right_list') ) : the_row();
                    ?>
                      <li>
                        <span><?php the_sub_field('name') ?> :</span>
                        <?php if (get_sub_field('checkbox')) {
                          $link = get_sub_field('link'); ?>
                          <a href="<?php esc_url($link['url'],'ivaneremeev'); ?>" target="<?php esc_attr_e($link['target'],'ivaneremeev'); ?>"><?php esc_html_e($link['title'],'ivaneremeev'); ?></a>
                        <?php } else {
                          the_sub_field('text');
                        } ?>
                      </li>
                    <?php
                  endwhile;
                endif;
              ?>
            </ul>
          </div>
          <div class="about_descr">
          <?php if (get_sub_field('description')) {
            the_sub_field('description');
          } ?>
          </div>
        </div>
      </div>
    <?php
  endwhile;
?>