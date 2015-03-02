<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-9 medium-8 columns" id="main-content" role="main" >

		<?php do_action('foundationPress_before_content'); ?>

		<h2><?php _e('Search Results for', 'FoundationPress'); ?> "<?php echo get_search_query(); ?>"</h2>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="search-result">
				<div class="text-center">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('', array('class' => 'th')); ?>
				<?php endif; ?>
				</div>
				<?php get_template_part( 'contenthome', get_post_format() ); ?>
			</div>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'contenthome', 'none' ); ?>
	<?php endif;?>

	<?php do_action('foundationPress_before_pagination'); ?>

	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
