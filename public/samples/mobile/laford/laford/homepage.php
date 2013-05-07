<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

		
<!-- Intro -->
		
<div class="intro">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="padd">
          <p class="biggy">Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet <a href="#">turpis</a> ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere.</p>
        </div>
      </div>
    </div>
  </div>
</div>
		
<!-- Intro ends -->
		
<!-- Slider -->
		
<div class="featured">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="padd">
          <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <!-- Replace the below image link with your image. Also change the heading and paragraph -->
              <div class="active item"><img src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="" />
                <div class="carousel-caption">
                  <h4>VivamusLorem ipsum consectetur</h4>
                  <p>Morbi tincidunt posuere eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                </div>
              </div>
              <!-- Replace the below image link with your image. Also change the heading and paragraph -->
              <div class="item"><img src="<?php bloginfo('template_directory');?>/img/2.jpg" alt="" />
                <div class="carousel-caption">
                  <h4>Phasellus varius dolorLorem</h4>
                  <p>Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim.</p>
                </div>
              </div>
              <!-- Replace the below image link with your image. Also change the heading and paragraph -->
              <div class="item"><img src="<?php bloginfo('template_directory');?>/img/3.jpg" alt="" />
                <div class="carousel-caption">
                  <h4>MaecenasLorem ipsum consectetur</h4>
                  <p>Duis a risus sed dolor placerat semper quis in urna. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                </div>
              </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
      </div>
    </div>
    <hr />
  </div>
</div>
		
<!-- Slider ends -->
		
<!-- Services starts-->
		
<div class="services">
  <div class="container"> 
    <div class="row">
      <div class="span4">
        <div class="padd">
          <!-- Edit below heading, image link and paragraph -->
          <h3>Morbi tincidunt posuere</h3>
          <img src="<?php bloginfo('template_directory');?>/img/2.jpg" alt="" />
          <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, <a href="#">turpis</a>  dignissim eget est. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat qua.</p>
          <a href="#" class="but">Read more</a>
          <div class="clearfix"></div>
        </div>
        <hr />
      </div>
      <div class="span4">
        <div class="padd">
          <!-- Edit below heading, image link and paragraph -->
          <h3>Donec aliquet convallis</h3>
          <img src="<?php bloginfo('template_directory');?>/img/1.jpg" alt="" />
          <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere.</p>
          <a href="#" class="but">Read more</a>
          <div class="clearfix"></div>
        </div>
        <hr />
      </div>
      <div class="span4">
        <div class="padd">
          <!-- Edit below heading, image link and paragraph -->
          <h3>Nam risus magna</h3>
          <img src="<?php bloginfo('template_directory');?>/img/3.jpg" alt="" />
          <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut commodo ullamcorper risus nec mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere.</p>
          <a href="#" class="but">Read more</a>
          <div class="clearfix"></div>
        </div>
        <hr />
      </div>
    </div>
	</div>
</div>

<!-- Services ends -->

<?php get_footer(); ?>