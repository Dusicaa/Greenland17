<!DOCTYPE html>
<html>
<head>
<title>Greenland</title>
<link href="<?php echo base_url();?>layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <!-- <link rel="shortcut icon" href="images/logo_title.png" />-->
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
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
    <script>
    $(document).ready(function() {
	//jQuery.noConflict();
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more &raquo;";
    var lesstext = "Show less &laquo;";
 
    $('.more').each(function() {
        var content = $(this).html();
        if(content.length>showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ 
                    '&nbsp;</span><span class="morecontent"><span>' + h + 
                    '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + 
                    '</a></span>';
            $(this).html(html);
        }
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
    </script>
</head>
<body id="top" class="homepage">
       <?php if (isset($skripteB)) {
         foreach ($skripteB as $s) {
            print $s."\n";
         }
       } ?>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="Home">Greenland</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right">  
       <?php 
       $attributes = array(
                    'class' => 'clear',               
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
    </nav>
  </header>
</div>
<!-- ##########################################kraj headera###################################################### -->
