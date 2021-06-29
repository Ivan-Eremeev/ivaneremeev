<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ivaneremeev
 */

get_header();
?>
		<!-- welcome-->
		<div class="welcome" style="<?php  ?>">
			<div class="wrapper">
				<div class="welcome_content">
          <?php if (CFS()->get( 'title' )) { ?>
            <div class="welcome_hi"><?php esc_html_e(CFS()->get( 'title' ), 'ivaneremeev'); ?>
              <h1 class="welcome_title"><?php esc_html_e(CFS()->get( 'subtitle' ), 'ivaneremeev'); ?><span id="text-print"><?php esc_html_e(CFS()->get( 'description' ), 'ivaneremeev'); ?></span></h1>
            </div>
          <?php } ?>
				</div>
			</div>
		</div>
		<!--	/welcome-->
		<!-- social-->
		<ul class="social">
      <?php 
        $loop = (CFS()->get( 'social-loop' ));
        if ($loop) {
          foreach ($loop as $item) { ?>
            <li class="social_item"><a class="social_link" href="<?php echo esc_url($item['link'],'ivaneremeev'); ?>" target="blank"><i class="fab <?php esc_attr_e($item['icon'],'ivaneremeev'); ?>"></i></a></li>
          <?php }
        } ?>
		</ul>
		<!--	/social-->
	</div>

<?php
get_footer();
?>