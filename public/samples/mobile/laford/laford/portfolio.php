<?php
/*
Template Name: Portfolio
*/
?>

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
		
<!-- Portfolio -->

<div class="portfolio-proj">
  <div class="container">
      <div class="row">
         <div class="span12">
            <h2 class="color">Portfolio</h2>
            <hr />
         </div>
      </div>
    <div class="row">
      <div class="span12">
        <div class="padd">
                    <p>
                        <!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. -->
                        <ul id="filters">
                          <li><a href="#" data-filter="*" class="but">All</a></li>
                          <li><a href="#" data-filter=".one" class="but">One</a></li>
                          <li><a href="#" data-filter=".two" class="but">Two</a></li>
                          <li><a href="#" data-filter=".three" class="but">Three</a></li>
                          <li><a href="#" data-filter=".four" class="but">Four</a></li>
                          <li><a href="#" data-filter=".five" class="but">Five</a></li>
                        </ul>
                    </p>
          <hr />
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span12">
        <div class="padd">
                    <div id="portfolio">
                        <!-- Add the above used filter names inside div tag. You can add more than one filter names. For image lightbox you need to include "a" tag pointing to image link, along with the class "prettyPhoto[pp_gal]".-->
                       <div class="element one three"><a href="<?php bloginfo('template_directory'); ?>/img/photos/1.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/1t.jpg" alt=""/></a></div>
                       <div class="element two one"><a href="<?php bloginfo('template_directory'); ?>/img/photos/2.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/2t.jpg" alt=""/></a></div>
                       <div class="element three five"><a href="<?php bloginfo('template_directory'); ?>/img/photos/3.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/3t.jpg" alt=""/></a></div>
                       <div class="element four two"><a href="<?php bloginfo('template_directory'); ?>/img/photos/4.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/4t.jpg" alt=""/></a></div>
                       <div class="element five one"><a href="<?php bloginfo('template_directory'); ?>/img/photos/5.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/5t.jpg" alt=""/></a></div> 
                       <div class="element four five"><a href="<?php bloginfo('template_directory'); ?>/img/photos/6.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/6t.jpg" alt=""/></a></div> 
                       <div class="element three one"><a href="<?php bloginfo('template_directory'); ?>/img/photos/7.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/7t.jpg" alt=""/></a></div>
                       <div class="element three one"><a href="<?php bloginfo('template_directory'); ?>/img/photos/7.jpg" class="prettyPhoto[pp_gal]"><img src="<?php bloginfo('template_directory'); ?>/img/photos/8t.jpg" alt=""/></a></div>
                    </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>