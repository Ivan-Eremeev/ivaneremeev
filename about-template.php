<?php
/*
Template Name: About
Template Post Type: page
*/

get_header();
?>

  <div class="header-placeholder"></div>
  <div class="wrapper">
    <?php if (CFS()->get( 'title' )) { ?>
      <div class="head">
        <h1 class="head_title"><?php esc_html_e(CFS()->get( 'title' ), 'ivaneremeev'); ?></h1>
        <div class="head_subtitle"><?php esc_html_e(CFS()->get( 'subtitle' ), 'ivaneremeev'); ?></div>
      </div>
    <?php } ?>
    <div class="about" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
      <?php if (CFS()->get( 'image' )) { ?>
      <div class="about_img"><img src="<?php esc_attr_e(CFS()->get( 'image' ), 'ivaneremeev'); ?>" alt="photo"></div>
      <?php } ?>
      <div class="about_lists">
        <ul class="about_list">
          <?php 
            if (CFS()->get( 'left-list' )) {
              $left_loop =  CFS()->get( 'left-list' );
              foreach ($left_loop as $item ) { ?>
                <li><span><?php esc_html_e($item['item-name'],'ivaneremeev'); ?> : </span><?php echo $item['item-text']; ?></li>
          <?php }} ?>
        </ul>
        <ul class="about_list">
          <?php 
            if (CFS()->get( 'right-list' )) {
              $left_loop =  CFS()->get( 'right-list' );
              foreach ($left_loop as $item ) { ?>
                <li><span><?php esc_html_e($item['item-name'],'ivaneremeev'); ?> : </span><?php echo $item['item-text']; ?></li>
          <?php }} ?>
        </ul>
      </div>
      <?php if (CFS()->get( 'text' )) { ?>
        <div class="about_descr">
          <?php echo CFS()->get( 'text' ); ?>
      </div>
      <?php } ?>
    </div>
    <div class="skills">
      <div class="wrapper">
        <?php if (get_field( 'title' )) { ?>
          <div class="head" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="head_title"><?php esc_html_e(get_field( 'skills-title' ),'ivaneremeev'); ?></h2>
            <div class="head_subtitle"><?php esc_html_e(get_field( 'skills-subtitle' ),'ivaneremeev'); ?></div>
          </div>
        <?php } ?>
        <div class="skills_row">
          <div class="skills_col">
            <ul class="skills_list">
              <?php
                if ( have_rows('skills') ):
                  while ( have_rows('skills') ) : the_row();
                    if ( have_rows('skills_repeater_left') ):
                      while ( have_rows('skills_repeater_left') ) : the_row();
                        ?>
                          <li class="skills_item"><span class="skills_text"><?php esc_html_e(get_sub_field('skills_text'),'ivaneremeev'); ?> - <span class="count-number" data-val-up="0" data-val-to="<?php esc_attr_e(get_sub_field('skills_num'),'ivaneremeev'); ?>" data-duration="3000"><?php esc_html_e(get_sub_field('skills_num'),'ivaneremeev'); ?></span>%</span><span class="skills_line" data-width="<?php esc_attr_e(get_sub_field('skills_num'),'ivaneremeev'); ?>%"><span class="skills_placeholder"></span></span></li>
                        <?php
                      endwhile;
                    endif;
                  endwhile;
                endif;
              ?>
            </ul>
          </div>
          <div class="skills_col">
            <ul class="skills_list">
              <?php 
                if ( have_rows('skills') ):
                  while ( have_rows('skills') ) : the_row();
                    if ( have_rows('skills_repeater_right') ):
                      while ( have_rows('skills_repeater_right') ) : the_row();
                        ?>
                          <li class="skills_item"><span class="skills_text"><?php esc_html_e(get_sub_field('skills_text'),'ivaneremeev'); ?> - <span class="count-number" data-val-up="0" data-val-to="<?php esc_attr_e(get_sub_field('skills_num'),'ivaneremeev'); ?>" data-duration="3000"><?php esc_html_e(get_sub_field('skills_num'),'ivaneremeev'); ?></span>%</span><span class="skills_line" data-width="<?php esc_attr_e(get_sub_field('skills_num'),'ivaneremeev'); ?>%"><span class="skills_placeholder"></span></span></li>
                        <?php
                      endwhile;
                    endif;
                  endwhile;
                endif; 
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="testimonials">
        <?php 
          if ( have_rows('testimonials') ):
            while ( have_rows('testimonials') ) : the_row();
              if ( get_sub_field('testimonials_title') ):
                ?>
                  <div class="head" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="head_title"><?php esc_html_e(get_sub_field('testimonials_title'),'ivaneremeev'); ?></h2>
                    <div class="head_subtitle"><?php esc_html_e(get_sub_field('testimonials_subtitle'),'ivaneremeev'); ?></div>
                  </div>
                <?php
              endif;
            endwhile;
          endif;
        ?>
        <div class="testimonials_slider">
          <?php 
            if ( have_rows('testimonials') ):
              while ( have_rows('testimonials') ) : the_row();
                if ( have_rows('testimonials_slide') ):
                  while ( have_rows('testimonials_slide') ) : the_row();
                    ?>
                      <div class="testimonials_slide">
                        <div class="testimonials_text"><?php esc_html_e(get_sub_field('testimonials_text'),'ivaneremeev'); ?></div>
                        <a href="<?php esc_attr_e(get_sub_field('testimonials_link'),'ivaneremeev'); ?>" target="_blank">
                          <?php 
                            if (get_sub_field('testimonials_photo')):
                              ?>
                                <img class="testimonials_avatar" data-lazy="<?php esc_attr_e(get_sub_field('testimonials_photo'),'ivaneremeev'); ?>" alt="">
                              <?php
                            else:
                              ?>
                                <img class="testimonials_avatar" data-lazy="<?php esc_attr_e(get_template_directory_uri() . '/assets/img/testimonials/no_foto_b.png','ivaneremeev'); ?>" alt="">
                              <?php
                            endif;
                          ?>
                        </a>
                        <div class="testimonials_name">
                          <a href="<?php esc_attr_e(get_sub_field('testimonials_link'),'ivaneremeev'); ?>" target="_blank"><?php esc_html_e(get_sub_field('testimonials_name'),'ivaneremeev'); ?></a>
                        </div>
                      </div>
                    <?php
                  endwhile;
                endif;
              endwhile;
            endif;
          ?>
        </div>
        <div class="testimonials_controlls"></div>
      </div>
    </div>

  </div>
<?php
get_footer();
?>