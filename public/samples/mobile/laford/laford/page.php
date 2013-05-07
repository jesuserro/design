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
            <?php while(have_posts()) : the_post(); ?>
              <div class="entry">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>