<div class="wrapper row3">
  <section class="container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-80 center">
        <?php
        for($i=0;$i<count($autor);$i++):?>
      <h2 class="font-x2 bold underlined"><?php echo $autor[$i]['naslov'];?></h2>
      <p><?php echo $autor[$i]['tekst'];?></p>
        <?php endfor;?>
       <?php
        for($i=0;$i<count($autor_slika);$i++):?>
      <img class="bgded" alt="<?php echo $autor_slika[$i]['alt'];?>" src="<?php echo $autor_slika[$i]['putanja'];?>" />
       <?php endfor;?>
    </div>
    
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- #######################################kraj wrappera######################################################### -->
<!-- ################################################################################################ -->