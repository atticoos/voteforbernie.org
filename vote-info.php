<?php
/*
 Template Name: Vote Information By State Page
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
<p><?php _e(get_field( 'description', false, false )); ?></p>
			<div id="content" class="vote-info">
				<div class="wrap">
					<!-- <h2 class="m-all t-1of4 d-1of4">Did you know?</h2> -->
					<div class="m-all t-1of4 d-1of4 did-you-know">
						<h2>Did you know?</h2>
						<p>If your state doesn't have open primaries, you may be unable to vote for Bernie Sanders unless you are registered as a Democrat.</p>
						<p>Find your state to ensure you're all set to cast your vote in the primaries!</p>
						<p class="notice"><span>Dates may change at any time. <br/>Don't wait until the deadline!</span> <em>If you find any errors, please <a href="mailto:contact@voteforbernie.org">email</a>.</em></p>
						<div class="bernie-book">
							<a href="http://www.amazon.com/gp/product/1568586841/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=1568586841&amp;linkCode=as2&amp;tag=voteforbernie-20&amp;linkId=4GDPARWACHB3OXXI"><img class="book-img" src="http://ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&amp;ASIN=1568586841&amp;Format=_SL160_&amp;ID=AsinImage&amp;MarketPlace=US&amp;ServiceVersion=20070822&amp;WS=1&amp;tag=voteforbernie-20" alt=""></a>
							<p>Bernie Sander's book detailing his 8-hour-long filibuster in 2010.</p>
							<p class="disclaimer">All book proceeds go to charity, and buying from this link helps support this resource.</p>
							<img src="http://ir-na.amazon-adsystem.com/e/ir?t=voteforbernie-20&amp;l=as2&amp;o=1&amp;a=1568586841" width="1" height="1" border="0" alt="" />
						</div>
				</div>
				<div class="m-all t-3of4 d-3of4">
					<!-- <h1 class="choose-state-header">Choose Your State</h1> -->
					<ul class="legend">
						<li class="open">Open Primaries</li>
						<li class="closed">Closed Primaries</li>
						<li class="other">Other</li>
						<li class="caucus">Caucus</li>
					</ul>
					<div id="vmap"></div>
				</div>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<!-- <h1 class="page-title"><?php the_title(); ?></h1> -->
									<div class="sign-up-notice">
										<p class="tentative">All dates are tentative and subject to change at any time.<br/>If you want to receive important updates for your state, sign up for the email list.</p>
										<?php echo yksemeProcessSnippet( "2da18e85f7" , "Keep me informed!" ); ?>
										<p class="byline vcard">Last updated: <?php the_modified_time(get_option('date_format')); ?>, if you find any mistakes, <a href="mailto:contact@voteforbernie.org">email</a>.</p>
									</div>
								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<div class="page-content m-all t-all d-all">
										<?php	the_content(); ?>
									</div>
								</section>

								<?php // comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
