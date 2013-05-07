<?php
/*
Template Name: FAQ
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
		
		
<!-- FAQ starts-->
		
<div class="faq">
  <div class="container"> 
   <div class="faq">
      <div class="row">
         <div class="span12">
            <!-- FAQ title -->
            <h2 class="color">FAQ</h2>
              <p>In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Nulla ullamcorper tortor non felis commodo in sagittis est accumsan. Nulla vitae cursus leo.</p>
         </div>
      </div>
      <hr />
      <!-- FAQ -->
      <div class="accordion" id="accordion2">
         <!-- Each item should be enclosed inside the class "accordion-group". Note down the below markup. -->
         <!-- First Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
               <!-- Title with experience details. Note down the markup before you edit. -->
              <h5>Cras tincidunt mi non arcu hendrerit eleifend</h5>
            </a>
          </div>
          <div id="collapseOne" class="accordion-body collapse in">
            <div class="accordion-inner">
               <!-- Details about job -->
              <p>Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. </p>
              <p>Praesent at tellus porttitor nisl porttitor sagittis. Mauris in massa ligula, a tempor nulla. Ut tempus interdum mauris vel vehicula. Nulla ullamcorper tortor non felis commodo in sagittis est accumsan. Nulla vitae cursus leo. Praesent eleifend sodales felis, in congue purus scelerisque eget. Donec commodo ligula et arcu luctus at viverra erat bibendum.</p>
               <!-- Contact details. Note down the markup before you edit. -->
            </div>
          </div>
        </div>
        <!-- Second Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
              <h5>Proin porttitor eros a ante molestie gravida</h5>
            </a>
          </div>
          <div id="collapseTwo" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. </p>
            </div>
          </div>
        </div>
        <!-- Thrid accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
              <h5>Maecenas quis tristique turpis</h5>
            </a>
          </div>
          <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Aliquam erat volutpat. Maecenas quis tristique turpis. Nulla facilisi. Duis sed velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <!-- Forth Accordion -->
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
              <h5>Proin porttitor eros a ante molestie gravida</h5>
            </a>
          </div>
          <div id="collapseFour" class="accordion-body collapse">
            <div class="accordion-inner">
              <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. </p>
              
              <ol>
                  <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                  <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                  <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                  <li>Maecenas hendrerit neque id ante dictum mattis</li>
                  <li>Vivamus non neque lacus, et cursus tortor</li>
               </ol>
            </div>
          </div>
        </div>
      </div>
   </div>
	</div>
</div>

<!-- FAQ ends -->

<?php get_footer(); ?>