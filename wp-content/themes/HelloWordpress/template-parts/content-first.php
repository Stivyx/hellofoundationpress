<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<div class="meta row collapse">
		<div class="small-9 column ">
			<?php the_category(", "); ?>
		</div>
		<div class="small-3 column text-right">
			<?php the_date(); ?>
		</div>
	</div>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<?php get_template_part('template-parts/img'); ?>



	<div class="entry-content">
		<div class="row">
			<?php do_action ('my_gallery'); ?>
		</div>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Lire la suite...</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
