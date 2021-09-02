<?php 
  while ( have_rows('skills') ) : the_row();
    ?>
      <div class="skills">
        <div class="wrapper">
          <?php if (get_sub_field('title')) { ?>
            <div class="head" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="head_title"><?php the_sub_field('title') ?></h2>
              <div class="head_subtitle"><?php the_sub_field('subtitle') ?></div>
            </div>
          <?php } ?>
          <div class="skills_row">
            <div class="skills_col">
              <ul class="skills_list">
                <?php 
                  if ( have_rows('left_list') ):
                    while ( have_rows('left_list') ) : the_row();
                      ?>
                        <li class="skills_item">
                          <span class="skills_text"><?php the_sub_field('name') ?> - 
                            <span class="count-number" data-val-up="0" data-val-to="<?php the_sub_field('value') ?>" data-duration="3000"><?php the_sub_field('value') ?></span>%
                          </span>
                          <span class="skills_line" data-width="<?php the_sub_field('value') ?>">
                            <span class="skills_placeholder"></span>
                          </span>
                        </li>
                      <?php
                    endwhile;
                  endif;
                ?>
              </ul>
            </div>
            <div class="skills_col">
              <ul class="skills_list">
                <?php 
                  if ( have_rows('right_list') ):
                    while ( have_rows('right_list') ) : the_row();
                      ?>
                        <li class="skills_item">
                          <span class="skills_text"><?php the_sub_field('name') ?> - 
                            <span class="count-number" data-val-up="0" data-val-to="<?php the_sub_field('value') ?>" data-duration="3000"><?php the_sub_field('value') ?></span>%
                          </span>
                          <span class="skills_line" data-width="<?php the_sub_field('value') ?>">
                            <span class="skills_placeholder"></span>
                          </span>
                        </li>
                      <?php
                    endwhile;
                  endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php
  endwhile;
?>