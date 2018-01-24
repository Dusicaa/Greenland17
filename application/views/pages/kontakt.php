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
     <div id="comments">
        <!--kontakt form-->
        <h2>Kontaktirajte nas!</h2>
          <?php echo form_open('');?>
          <div class="one_third first">
            <label for="name">Name <span>*</span></label> 
            <?php echo form_input($tb_ime_kontakt);?>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <?php echo form_input($tb_email);?>
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <?php echo form_textarea($ta_poruka);?>
          </div>
          <div>    
            <?php echo form_submit($btn_posalji_mejl);?>
            &nbsp;  
          </div>
            <?php echo form_close();?>
        </form>
      
        
      
       
       
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div> 
<div class="wrapper row3">
    <main class="container clear"> 
    <!-- main body -->
    <div class="content">    
    <!--  <h6 class="title"> Anketa</h6>-->
      
<?php echo ($this->session->flashdata('message')) ? $this->session->flashdata('message') : '';?>
<br/>
<?php echo $poll['question'];
      echo $poll['poll_form'];
      
?>
<br/>
<?php echo anchor('Kontakt/poll_result', 'Vidi rezultate &raquo;');?>
      </div>
    </div>
    
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>