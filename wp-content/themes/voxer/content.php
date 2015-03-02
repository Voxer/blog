<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="each-posting">
		<a class="post-title" href="<?php the_permalink(); ?>">
			<div class="post-thumb columns large-4 medium-4 small-12 nopadding text-center">
				<?php if ( has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('', array('class' => 'th')); ?>
				<?php endif; ?>
				<div class="clearfix">  &nbsp;</div>
			</div>
			<div class="post-content columns large-8 medium-8 small-12">
				<?php FoundationPress_entry_meta(); ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="post-content">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<div class="clearfix"></div>
		</a>
	</section>
</article>