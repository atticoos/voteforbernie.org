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
					<h2 class="m-all t-1of4 d-1of4">Did you know?</h2>
					<div class="m-all t-3of4 d-3of4">
					<p>If your state has closed primaries, you will not be able to vote for candidates outside of your affiliated party. This means that if you are registered as a republican or an independent or anything other than democrat, you will be unable to vote for Bernie Sanders, who is caucusing with the Democratic Party.</p>
<!-- 					<p>On the fence? Here are some other resources you mind find helpful.</p>
					<ul>
						<li><a href="#">Why should I vote at all?</a></li>
						<li><a href="#">Why should I vote for Bernie Sanders?</a></li>
						<li><a href="#">What is Bernie's stance on... (Agenda and Issues)</a></li>
						<li><a href="#">How does Bernie Sanders compare to Hillary Clinton?</a></li>
					</ul> -->
					<p>Find your state below to ensure you're all set to cast your vote when primaries roll around.</p>
					<p class="notice"><span>The following dates may change at any time. Register as early as you can, and don't wait until the deadline!</span> <em>Come back regularly to ensure you have the most up-to-date information. If you find any errors, please <a href="mailto:contact@voteforbernie.org">email me</a>.</em></p>
				</div>
				<h1 class="choose-state-header">Choose Your State</h1>
				<ul class="legend">
					<li class="open">Open Primaries</li>
					<li class="closed">Closed Primaries</li>
					<li class="other">Other</li>
					<li class="caucus">Caucus</li>
				</ul>
				<div id="vmap"></div>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<!-- <h1 class="page-title"><?php the_title(); ?></h1> -->
									<div class="sign-up-notice">
										<p class="tentative">All dates are tentative and subject to change at any time.<br/>If you want to receive important updates for your state, sign up for the email list.</p>
										<?php echo yksemeProcessSnippet( "2da18e85f7" , "Keep me informed!" ); ?>
										<p class="byline vcard">Last updated: <?php the_modified_time(get_option('date_format')); ?>, if you find any mistakes, <a href="mailto:contact@voteforbernie.org">let me know</a>.</p>
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
