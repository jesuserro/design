<?php
/*
Template Name: Contact
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
		
		
<!-- Contact page starts-->
		
<div class="contact">
  <div class="container"> 
    <div class="row">
      <div class="span12">
         <h2 class="color">Contact Us</h2>
         <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra.</p>
         <hr />
      </div>
    </div>  
    <div class="row">
      <div class="span6">
               <div class="form">
                 <form class="form-horizontal">
                     <div class="control-group">
                       <label class="control-label" for="name">Name</label>
                       <div class="controls">
                         <input type="text" class="input-medium" id="name">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="email">Email</label>
                       <div class="controls">
                         <input type="text" class="input-medium" id="email">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="website">Website</label>
                       <div class="controls">
                         <input type="text" class="input-medium" id="website">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="comment">Comment</label>
                       <div class="controls">
                         <textarea class="input-madium" id="comment" rows="5"></textarea>
                       </div>
                     </div>
                     <div class="form-actions">
                       <button type="submit" class="btn btn-inverse">Submit</button>
                       <button type="reset" class="btn">Reset</button>
                     </div>
                 </form>
               </div>
            </div>
            <div class="span6">
               <div class="gmap">
                  <iframe height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Hampton+Court+Palace,+East+Molesey,+United+Kingdom&amp;aq=2&amp;oq=London&amp;sll=9.930582,78.12303&amp;sspn=0.192085,0.308647&amp;ie=UTF8&amp;hq=Hampton+Court+Palace,+East+Molesey,+United+Kingdom&amp;ll=51.404615,-0.341578&amp;spn=0.013921,0.032015&amp;t=m&amp;output=embed"></iframe>
               </div>
               <hr />
               <div class="address">
                  <div class="row">
                     <div class="span3">
                        <address>
                          <span class="color bold company">Your Company, Inc.</span><br>
                          795 Folsom Ave, Suite 600<br>
                          San Francisco, CA 94107<br>
                        </address>
                     </div>
                     <div class="span3">
                        <address>
                          <span class="color bold company">Your Name</span><br>
                          <a href="mailto:#">first.last@gmail.com</a><br>
                          <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                     </div>
                  </div>
               </div>
            </div>
    </div>
	</div>
</div>

<!-- Contact page ends -->

<?php get_footer(); ?>