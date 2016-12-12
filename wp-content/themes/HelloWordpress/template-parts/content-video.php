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
	<div class="meta">
		<?php the_category(", "); ?>
		<?php the_date(); ?>
	</div>
	<?php if (has_post_thumbnail()): ?>
		<div class="thumbnail video">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">Lire la suite...</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
