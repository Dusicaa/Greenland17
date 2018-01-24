<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="Home">Početna</a></li>
      <li><a href="#">Stranice</a></li>
      <li><a href="#"><?php echo $stranica; ?></a></li>
    </ul>  
  </div>
</div>
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->    
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Ovaj sajt sadrzi slike preuzete sa interneta, nije namenjen komercijalnoj upotrebi.  </header>
       <script>
          $(document).ready(function(){
              $(".one_quarter:eq(0)").addClass("first");
               $(".one_quarter:eq(4)").addClass("first");
                $(".one_quarter:eq(8)").addClass("first");
                 $(".one_quarter:eq(12)").addClass("first");
                   $(".one_quarter:eq(16)").addClass("first");
          });     
</script>  
          <ul class="nospace clear">          
          <?php $offset=$this->uri->segment(3,0)+1;?>
                   <?php foreach ($query->result() as $galerija_slika): ?>
              <li class="one_quarter">    
                  <a rel='zoom' target="_blank" href="<?php echo base_url();?>images/demo/gallery/<?php echo $galerija_slika->putanja; ?>.jpg" style='outline-style:none;text-decoration:none;'>
                      <img src="<?php echo base_url();?>images/demo/gallery/<?php echo $galerija_slika->putanja; ?>.jpg" alt="">   
                 </a>
              </li>
         <?php endforeach;?>      
          </ul>
        <?php 
        echo $page_links;
       
        ?>
        </figure>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->