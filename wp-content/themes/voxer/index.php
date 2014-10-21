<?php get_header('home'); ?>
<div class="row">
	<div class="small-12 large-9 medium-8 columns" role="main" id="main-content">
	<div id="home-page">
		<?php if ( have_posts() ) : ?>
			<?php do_action('foundationPress_before_content'); ?>
			<?php 
				function getUrl() {
			  	$url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
			  	$url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
			  	$url .= $_SERVER["REQUEST_URI"];

			  	return $url;
			}
			?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<?php $counter++; ?>
				<?php if ( $counter == 1 && ( getUrl() == 'http://localhost:8888/'  || getUrl() == 'http://localhost:8888/page/1/'  || getUrl() == 'http://www.voxer-blog.com:80/' || getUrl() == 'http://www.voxer-blog.com:80/page/1' || getUrl() == 'http://blog.voxer.com/' || getUrl() == 'http://blog.voxer.com/page/1')   ): ?>
					<section id="latest-post">
						<div id="latest-post-thumb" class="text-center">
							<?php if ( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('', array('class' => 'th')); ?>
							<?php endif; ?>
						</div>
						<div id="latest-post-title">
							<a class="post-title" href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
						</div>
						<div id="latest-post-content">
							<?php the_content(''); ?>
						</div>
						<a href="<?php the_permalink(); ?>" >
							<div class="large-4 small-5 left" id="latest-post-read-more">
								<div id="latest-post-more">
									Read More >
								</div>	
							</div>
						</a>
						<div id="share" class="large-8 small-7 right">
							<i class="fa fa-share-alt-square fa-4"></i>
						</div>
						<div class="large-12 small-12 left" id="latest-post-social">
							<div class="twitter-share social">
								<a href="<?php the_permalink(); ?>" class="twitter-share-button">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>
							<div class="fb-share social">
								<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							</div>
							<div class="linkedin-share social">
								<script src="//platform.linkedin.com/in.js" type="text/javascript">lang: en_US </script>
								<script type="IN/Share" data-url="<?php the_permalink(); ?>" data-counter="right"></script>				
							</div>
							<div class="google-share social">
								<div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</section>
				<?php else : ?>
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

				<?php endif; ?>
				<div class="clearfix"></div>
				<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
			<?php endwhile; ?>
			<div class="clearfix">
			</div>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php do_action('foundationPress_before_pagination'); ?>
		<?php endif;?>
		
		
		<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
			</nav>
		<?php } ?>

		<?php 
		add_theme_support( 'infinite-scroll', array(
		    'container'    => 'home-page',
		) );
		?>
		<?php do_action('foundationPress_after_content'); ?>
	</div>
	</div>
	<?php get_sidebar('post'); ?>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
