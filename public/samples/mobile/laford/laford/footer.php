<!-- footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="fpadd">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 1') ) : ?>
            <div class="widget">
              <h4>About Sansy</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula.  <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci.</p>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="span4">
        <div class="fpadd">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 2') ) : ?>
            <div class="widget">
              <h4>Share it...</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula.  <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. </p>
            <div class="social">
               <a href="#"><i class="icon-facebook"></i></a>
               <a href="#"><i class="icon-twitter"></i></a>
               <a href="#"><i class="icon-linkedin"></i></a>
               <a href="#"><i class="icon-google-plus"></i></a>
               <a href="#"><i class="icon-pinterest"></i></a>
            </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="span4">
        <div class="fpadd">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer 3') ) : ?>
            <div class="widget">
              <h4>About</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula.  <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci.</p>
            </div>	
          <?php endif; ?>
        </div>
      </div>
		</div>	
    <hr />
    <div class="row">
      <div class="span12">
        <div class="fpadd">Copyright &copy; 2012 - <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a> - Designed by <a href="http://responsivewebinc.com/bootstrap-themes/">Bootstrap Themes</a></div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</footer>		
		
</div>
		
<!-- JS -->

<script src="<?php bloginfo('template_directory');?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/isotype.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/custom.js"></script>

   <?php wp_footer(); ?>
  </body>
</html>