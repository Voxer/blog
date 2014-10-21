<?php get_header(); ?>
<div class="row" id="each-post">
	<div class="small-12 large-9 medium-8 columns" role="main" id="main-content">
	<!--- each post -->
	
	<?php do_action('foundationPress_before_content'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<?php if ( has_post_thumbnail() ): ?>
					<div class="row">
						<div class="column text-center">
							<?php the_post_thumbnail('', array('class' => 'th')); ?>
						</div>
					</div>
				<?php endif; ?>
				
				<h1 class="entry-title" style="text-align:left"><?php the_title(); ?></h1>
				<div class="nopadding" style="float: left; padding-right: 20px !important; padding-top: 5px !important;">
					<?php FoundationPress_entry_meta(); ?><!--the date -->
				</div>
				<div id="share" class="left">
					<i class="fa fa-share-alt-square fa-4"></i>
				</div>
				<div id="header-social" class="large-12 small-12 left">
					
					<div class="fb-share social">
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
					</div>
					<div class="linkedin-share social">
						<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/Share" data-url="<?php the_permalink(); ?>" data-counter="right"></script>					
					</div>
					<div class="google-share social">
						<div class="g-plus" data-action="share" data-annotation="bubble"> </div>
					</div>
					<div class="twitter-share social">
						<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</div>
			</header>
			<div class="clearfix"></div>
			<?php do_action('foundationPress_post_before_entry_content'); ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
				<div id="bottom-social" class="clearfix"> 
					<div class="fb-share social">
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
					</div>
					<div class="linkedin-share social">
						<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script><script type="IN/Share" data-url="<?php the_permalink(); ?>" data-counter="right"></script>					
					</div>
					<div class="google-share social">
						<div class="g-plus" data-action="share" data-annotation="bubble"> </div>
					</div>
					<div class="twitter-share social">
						<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</div>
			</footer>

			<?php do_action('foundationPress_post_before_comments'); ?>
			<!--< ?php comments_template(); ?> -->
			<div id="fb-commets" class="hide-for-small-only">
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light"></div>
			</div>

			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
		<article id="footer-latest-post">
			<?php dynamic_sidebar("footer-widgets"); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
