<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      
      <address class="btmspace-15">
      Ime kompanije<br>
      Ulica &amp; Broj<br>
      Grad<br>      
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
        <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
      </ul>
    </div>
    
    <div class="one_quarter">
      <br/>  <br/>  <br/>  <br/>  
     <p >Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
  </div>
   <div class="one_quarter">
       <br/>
         <br/>
           <br/>  <br/> 
    <p >Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </div>
    <div class="one_quarter">
      <?php
               echo anchor('<?php echo base_url();?>download','Dokumentacija');
            ?>
        <br/>
        <br/>
         <?php 
          if( $this->session->userdata('username')=='admin'){
        
          echo anchor('Upload','Upload pictures');}
            ?>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>

<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url();?>layout/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url();?>layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="<?php echo base_url();?>layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<!-- Homepage specific -->
<script src="<?php echo base_url();?>layout/scripts/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();?>layout/scripts/jquery.easypiechart.min.js"></script>
<div id="preloader"><div></div></div><!-- Basic page preloader -->
<script>$(window).load(function(){$("#preloader div").delay(500).fadeOut();$("#preloader").delay(800).fadeOut("slow");});</script>
<!-- / Homepage specific -->
</body>
</html>