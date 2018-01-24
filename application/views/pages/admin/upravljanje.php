<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Watercolor | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/spring.css" type="text/css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<script>/* EXAMPLE */ DD_belatedPNG.fix('*');</script>
<![endif]-->
<!-- ENDS CSS -->
<!-- JS -->
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
<!-- ENDS JS -->
<!-- superfish -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/superfish-custom.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish-1.4.8/js/hoverIntent.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/superfish-1.4.8/js/superfish.js"></script>-->
<!-- ENDS superfish -->
<!-- Cufon -->
<script src="<?php echo base_url();?>assets/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bebas_400.font.js" type="text/javascript"></script>
<script type="text/javascript">Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });</script>
       <?php if (isset($skripteH)) {
         foreach ($skripteH as $s) {
            print $s."\n";
         }
       } ?>
       <?php if (isset($cssH)) {
         foreach ($cssH as $c) {
            print $c."\n";
         }
       } ?>
<!-- /Cufon -->
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
  <!-- navigation -->
  <!--ul id="nav" class="sf-menu">
    <li class="custom"><a href="contact.html">CONTACT</a></li>
    <li class="custom"><a href="blog.html">BLOG</a></li>
    <li class="custom"><a href="gallery.html">GALLERY</a></li>
    <li class="custom"><a href="about.html">ABOUT</a>
      <ul>
        <li><a href="#">Sub page 1</a></li>
        <li><a href="#">Sub page 2</a></li>
        <li><a href="#">Sub page 3</a></li>
      </ul>
    </li>
  </ul-->
       <?php 
       $attributes = array(
                    'class' => 'sf-menu sf-js-enabled sf-shadow',
					'id' => 'nav'
                    );

$list = array(
        anchor('Home','Pocetna')  ,                            
            anchor('#','Stranice')=> array(          anchor('Galerija','Galerija'), 
                                                    anchor('Vesti','Najnovije vesti'), 
                                                    anchor('Donacije','Donacije'),
                                                    anchor( 'Kontakt','Kontakt'),
                                                     anchor('Autor','O autoru')
                                                    ) ,
            anchor('Admin', 'Admin panel')
            );

echo ul($list, $attributes);
       ?>
  <!-- ENDS navigation -->
  <!-- HEADER -->
  <div id="header"> <a href="<?php echo base_url();?>" style="text-decoration:none;"><h1 style="margin-top:60px;font-size:50px;">GREENLAND</h1></a> <img src="<?php echo base_url();?>assets/img/nav-arrow.png" alt="" id="arrow" class="arrow-contact" />
  </div>
  <!-- ENDS HEADER -->
  <!-- MAIN -->
  <div id="main">
    
        <h2>Admin panel</h2>
		<div id="tabele" style="margin-left:10px;">
			<h5 style="font-size:16px;">Uredi tabelu: <?php echo $tabela; ?></h5>
			  <?php print $output; ?>
			  <?php if (isset($greskeCRUD)) {?>
				 <h3>Detalji o grešci</h3><br/>
				 <?php print $greskeCRUD; ?><br/>
			  <?php } ?>
			  <div class="prazan">Ovo je prazan div</div>
			  <?php print anchor('admin/admin', 'Vrati se na admin panel.','style="margin-top:20px !important;"'); ?>
		</div>
    <!-- ENDS right-content -->
  </div>
  <!-- ENDS MAIN -->
</div>
<!-- ENDS WRAPPER -->
<!-- FOOTER -->
<div id="footer">
  <div id="footer-wrapper">
    <ul id="follow">
      <li>
        <p>Follow us: </p>
      </li>
      <li><a href="#"><img src="<?php echo base_url();?>assets/img/twitter.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>assets/img/facebook.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>assets/img/linkedln.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>assets/img/rss.png" alt="" /></a></li>
    </ul>
    <div class="footer-bottom">
      <p class="legal">&copy; Copyright 2012 <a href="#">Company Name</a> All Rights Reserved | Website Template By <a target="_blank" href="http://www.luiszuno.com">luiszuno</a></p>
    </div>
  </div>
</div>
<!-- ENDS FOOTER -->
<!-- start cufon -->
<script type="text/javascript">Cufon.now();</script>
<!-- ENDS start cufon -->
</body>
</html>
