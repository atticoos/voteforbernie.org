<?php
/*
 Template Name: We Want Debate Page
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

      <div id="content" class="debate-page">
        <div class="wrap">
          <h2 class="m-all t-all d-1of4 debate-title">#We Want Debate</h2>
          <div class="m-all t-all d-3of4">
          <p>The Democratic National Committee isn't playing fair. They've scheduled <strong>six debates</strong> between the 2016 Democratic Presidential Candidates, <strong>433% fewer</strong> than the 26 held in 2008. This will severely limit voters' understanding of each candidate. Especially those that aren't household names.</p>
          <p>To make matters worse, the DNC <strong>forbids</strong> candidates from participating in debates that are not organized by the DNC. This isn't about Bernie Sanders. This isn't about Hillary Clinton. This is about having well-informed voters, a cornerstone of democracy.</p>
          <p>Another cornerstone of democracy is <strong>getting involved</strong>!
          <br/>Make a difference right now by joining our #WeWantDebate Twitter campaign.</p>
        </div>

        <div id="inner-content" class="wrap cf">

            <main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                <header class="article-header">
                  <!-- <h1 class="page-title"><?php the_title(); ?></h1> -->
                  <p class="byline vcard">Last updated: <?php the_modified_time(get_option('date_format')); ?></p>
                </header>

                <div class="m-all t-1of3 d-1of4 thunder-container">
                  <iframe frameborder='0' height='540px' src='https://www.thunderclap.it/projects/28439-we-want-more-debates-dnc/embed' width='250px'></iframe>
                </div>
                <div class="m-all t-2of3 d-3of4 timer-container">
                  <div class="flip-counter clock"></div>
                  <p>This campaign will officially start on <strong>August 5th, 2015</strong>, at <strong>12:00PM PDT</strong>.
                  <br/>Join the mailing list to get an email reminder before it goes live!</p>
                  <?php echo yksemeProcessSnippet( "2da18e85f7" , "Keep Me Informed!" ); ?>
                  <p>When the campaign goes live, this page will provide resources to spread the message.</p>
                  <a class="twitter-share" href="https://twitter.com/intent/retweet?tweet_id=616300503991869441&amp;source=vote_for_bernie&amp;related=vote_for_bernie" target="_blank">Our campaign to tell the DNC we want more debates launches on August 5!<br/><br/>Join us@ <span>voteforbernie.org/debate/ #FeelTheBern</span><em>Tweet This</em></a>
                  <p>For now, <strong>click the 'Tweet This' button</strong> above to let others know about the campaign,
                  <br/>then <strong>join the Thunderclap campaign</strong> and link it with your twitter, facebook, and/or tumblr!</p>
                  <p>Finally, join more than 200,000 Americans by signing <a href="https://go.berniesanders.com/page/s/debates?source=voteforbernie&amp;utm_source=voteforbernie&amp;utm_medium=post&amp;utm_campaign=voteforbernie">the official petition</a>. #FeelTheBern!</p>
                </div>

                <section class="entry-content cf" itemprop="articleBody">
                  <div class="page-content m-all t-all d-all">



               <!--      <h2>#WeWantDebate x <strong>204</strong></h2>
                    <h3>Total reach: 210,000</h3> -->
                    <?php // the_content(); ?>
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
