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
        <?php 
          if( $this->session->userdata('username')=='admin'){?>
     <div id="comments">
        <!--kontakt form-->
        <h2>Admin panel</h2>
		<div id="tabele" style="margin-left:10px;">
			<h5 style="font-size:16px;">Upravljanje tabelama</h5>
			<ul>
				<?php foreach ($tabele as $t) { ?>
					<li><?php print $t; ?></li>
				<?php } ?>
			</ul>
		</div>
      </div>
          <?php } else{
     redirect('Home');
          }?>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>