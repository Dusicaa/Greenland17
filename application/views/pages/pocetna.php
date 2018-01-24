<div id="slider">
  <div class="flexslider basicslider">
    <ul class="slides">
      <!-- ################################################################################################ -->
        <?php
        for($i=0;$i<count($slider_slike);$i++):?>
      <li class="bgded" style="background-image:url('images/demo/slider/<?php echo $slider_slike[$i]['putanja'];?>.png')">
          
        <article class="flex-content">
          <h2 class="heading underlined">Spašavajući </h2>
          <p>životinje spašavamo i sebe...</p>
          <p><a class="btn" href="Donacije">Donirajte!</a></p>
        </article>
      </li>
       <?php endfor;?>
     
      <!-- ################################################################################################ -->
    </ul>
  </div>
</div>
<!-- ###############################kraj slidera################################################################# -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-80 center">
      <h2 class="font-x2 bold underlined">Ko smo mi?</h2>
      <span class="more">U poslednjih nekoliko godina, povecan je broj kitova upletenih u mreze.
          Greenland organizacija osnovana je radi ujedinjenja ljudi i kompanija ,za prevenciju, obezbedjenje i zastitu kitova.
          Radimo i na podizanju svesti javnosti o problemu kitova upletenih u mreze,kroz saradnju
          sa zainteresovanim ljudima putem obrazovanja ,obuke, pisanih i stampanih medija.</span>
    </div>
    <div class="group latest">
      <?php foreach ($dohvati_vesti_limit as $vesti): ?>

      <article class="one_quarter">
        <figure><img src="images/demo/vesti/<?php echo $vesti['putanja'];?>.jpg" alt="<?php echo $vesti['alt'];?>">
          <figcaption><?php echo $vesti['datum'];?></figcaption>
        </figure>
        <h3 class="font-x1 heading"><?php echo $vesti['naslov'];?></h3>
        <span class='more'><?php echo $vesti['tekst'];?></span>
        
      </article>
     <?php endforeach;?>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- #######################################kraj wrappera######################################################### -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->