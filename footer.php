<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nuvisionalliance
 */

?>

	

<?php wp_footer(); ?>

      <!-- FOOTER -->
	  <footer class="bg-dark">
        <div class="container bg-dark">
          <div class="row">
            <div class="col col-md-5 col-xs-6 mt-2">
              <img class="ftLogo" src="<?php bloginfo('stylesheet_directory');?>/img/dove_4.png" alt="NVA-home">
              <h2 class="text-white">Nuvision Alliance</h2>
              <p>Praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p>

           
            <p>&copy; <a href="http://thecscoding.com/">TheCSCoding.com</a> &middot;
          </div>

          <div class="col col-md-2 col-xs-6 mt-2">
            <div id="text-3" class="widget widget_text"><h3 class="text-white">Company</h3>      
              <div class="textwidget">      
               <ul class="footer-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Latest Causes</a></li>
               
               </ul>
            </div>
        </div>                                               
      </div>
      <div class="col col-md-2 col-xs-6 mt-2">
          <div class="widget widget_text"><h3 class="text-white">Connect</h3>     
            <div class="textwidget">             
          <ul class="footer-list">
              <li><a href="#">Email</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Instagram</a></li>
            
           </ul>
         </div>
      </div>                                                
   </div>
  <div class="col col-md-2 col-xs-6 mt-2">
          <div id="text-4" class="widget widget_text"><h3 class="text-white">Social</h3>     
            <div class="textwidget">            
          <ul class="footer-list">
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms of use</a></li>
             
           </ul>
         </div>
      </div>                                                
   </div>


    </div>
  </div><!-- container -->
</footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_directory');?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php bloginfo('template_directory');?>/js/holder.min.js"></script>
    <!-- MDB core JavaScript -->
    <script src="<?php bloginfo('template_directory');?>/js/skip-link-focus-fix.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>


    <!-- Animations init-->
<script src="<?php bloginfo('template_directory');?>/js/wow.js"></script>
<script type="text/javascript">
new WOW().init();
</script>

</body>
</html>
