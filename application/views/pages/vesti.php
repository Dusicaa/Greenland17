<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="Home">Početna</a></li>
      <li><a href="#">Stranice</a></li>
      <li><a href="#"><?php echo $stranica; ?></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="group latest">
      
          <?php foreach ($dohvati_vesti as $vesti): ?>

      <article class="one_quarter">
        <figure><img src="<?php echo base_url();?>images/demo/vesti/<?php echo $vesti['putanja'];?>.jpg" alt="<?php echo $vesti['alt'];?>">
          <figcaption><?php echo $vesti['datum'];?></figcaption>
        </figure>
        <h3 class="font-x1 heading"><?php echo $vesti['naslov'];?></h3>
        <span class='more'>
            <?php echo $vesti['tekst'];?></span>
       
      </article>
     <?php endforeach;?>
    </div>
      <div class="scrollable">
       
      </div>
     
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->