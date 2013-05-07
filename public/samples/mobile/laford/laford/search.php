<?php get_header(); ?>

<!-- Intro -->
		
<div class="intro">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="padd">
          <p class="biggy">Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere.</p>
        </div>
      </div>
    </div>
  </div>
</div>
		
<!-- Intro ends -->
		
<!-- Blog -->
		
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="padd">
          <div class="posts">
            <?php if(have_posts()) : ?>
              <h3>Search results for &#8216;<?php the_search_query(); ?>&#8217;</h3>
              <?php while(have_posts()) : the_post(); ?>
                <div class="entry">
                  <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                  <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
                <div class="navigation">
                  <div class="pull-left"><?php next_posts_link('&laquo; Previous Entries') ?></div>
                  <div class="pull-right"><?php previous_posts_link('Next Entries &raquo;') ?></div>
                  <div class="clearfix"></div>
                </div>
                <?php else : ?>
                <div class="entry">
                  <h2>No search results</h2>
                  <p>We did not find any posts containing the string &#8216;<?php the_search_query(); ?>&#8217;.</p>
                </div>
								<?php endif; ?>
              </div>
            </div>
          </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>