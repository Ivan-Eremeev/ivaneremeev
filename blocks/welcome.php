<?php 
  while ( have_rows('welcome') ) : the_row();
    ?>
      <!-- welcome-->
				<div class="welcome" style="background-image: url(<?php the_sub_field('image') ?>);">
					<div class="wrapper">
						<?php if (get_sub_field('title')) { ?>
              <div class="welcome_content">
                <div class="welcome_hi"><?php the_sub_field('title') ?>
                  <h1 class="welcome_title"><?php the_sub_field('subtitle') ?><span id="text-print"><?php the_sub_field('subsubtitle') ?></span></h1>
                </div>
              </div>
            <?php } ?>
					</div>
				</div>
				<!--	/welcome-->
				<!-- social-->
				<ul class="social">
          <?php 
            if ( have_rows('social') ):
              while ( have_rows('social') ) : the_row();
                ?>
                  <li class="social_item"><a class="social_link" href="<?php the_sub_field('link') ?>" target="blank"><i class="fab <?php the_sub_field('icon') ?>"></i></a></li>
                <?php
              endwhile;
            endif;
          ?>
				</ul>
				<!--	/social-->
    <?php
  endwhile;
?>