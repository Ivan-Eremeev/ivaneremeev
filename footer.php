<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ivaneremeev
 */

?>

<?php if ( is_page_template('home-template.php') ) { ?>
	</div>
</body>
</html>
<?php }else { ?>
</div>
			<!-- footer-->
			<footer class="footer"> 
				<div class="wrapper">
					<p>&copy; Ivan Eremeev 2020</p>
				</div>
			</footer>
			<!-- /footer-->
		</div>
	</body>
</html>
<?php } ?>

<?php wp_footer(); ?>
