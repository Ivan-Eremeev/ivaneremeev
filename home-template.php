<?php
/*
Template Name: Home
Template Post Type: page
*/

get_header();
?>
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
		<ul class="social">
      <?php 
        $loop = (CFS()->get( 'social-loop' ));
        if ($loop) {
          foreach ($loop as $item) { ?>
            <li class="social_item"><a class="social_link" href="<?php echo esc_url($item['link'],'ivaneremeev'); ?>" target="blank"><i class="fab <?php esc_attr_e($item['icon'],'ivaneremeev'); ?>"></i></a></li>
          <?php }
        } ?>
		</ul>
	</div>

<?php
get_footer();
?>