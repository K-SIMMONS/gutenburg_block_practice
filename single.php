<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenburg-practice
 */

get_header();
?>
	<h1>This is single.php</h1>
	

	<div class="container">
		<div class="row">
			<div class="col">
				<?php the_content();?>
			</div>
		</div>
	</div>

<?php
get_footer();
