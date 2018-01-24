<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="<?php echo base_url();?>Home">Početna</a></li>
      <li><a href="#">Stranice</a></li>
      <li><a href="#"><?php echo $stranica; ?></a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Donirajte!</h6>
  
      <nav class="sdb_holder">
        <ul>  
          <?php 
            $ulogovan = $this->session->userdata('ulogovan');
          if($ulogovan){?>
          <li>Izaberite nacin doniranja:
            <ul>
              <li><a href="#">online Uplatom</a></li>
              <li><a href="#">uplatom na nas ziro racun</a></li>
            </ul>
          </li>
          <?php      }  ?>
        </ul>
      </nav>
      <div class="sdb_holder">
      <section id="registracija">
          
 <?php  
                   
                        if(isset($ulogovan) && !$ulogovan)
                        {
                            echo '<h2 style="color:#13511F; margin-bottom: 10px;">Registrujte se!</h2>';
                        echo form_open('Donacije/registracija',array('id'=>'forma','name'=>'forma','class'=>'form-horizontal'));
                        echo form_label('Korisnicko ime:','tbKorIme'); // 2. parametar f-je je id polja na koje se odnosi labela
                        echo form_input(array('id'=>'tbKorIme','name'=>'tbKorIme', 'class'=>'form-control'));
                        echo form_label('Lozinka:','tbLozinka');
                        echo form_password(array('id'=>'tbLozinka','name'=>'tbLozinka','class'=>'form-control'));
                         echo form_label('Lozinka ponovo:','tbLozinkaPonovo');
                        echo form_password(array('id'=>'tbLozinkaPonovo','name'=>'tbLozinkaPonovo','class'=>'form-control'));
                         echo form_label('E-mail:','tbEmail'); // 2. parametar f-je je id polja na koje se odnosi labela
                        echo form_input(array('id'=>'tbEmail','name'=>'tbEmail', 'class'=>'form-control'));
                        echo form_submit(array('id'=>'btnRegistracija','name'=>'btnRegistracija','class'=>'btn btn-danger', 'value'=>'Registruj se'));
                        echo form_close();
                        
                        
                        } 
                       $registrovan=$this->session->flashdata('registracija_uspesna') ;
                       if($registrovan){
                         echo '<h4>registracija uspesna</h4>';
                       }
                    ?>
    	
        
</section>
          <section id="logovanje">
           
                <?php
                       
                    /* 
                         * 3.  Sa desne strane u delu Side Widget Well kreirati formu za logovanje 
                         * isključivo pomoću odgovarajućih helper-a. Vrednost atributa action forme
                         *  treba da je Logovanje/login . 
                     */
                    
                        // morate ukljuciti helper 'form'
                        //$ulogovan = $this->session->userdata('ulogovan');
                        if(isset($ulogovan) && !$ulogovan)
                        {   echo '<h2 style="color:#13511F; margin-bottom: 10px;">Ulogujte se!</h2>';
                            echo form_open('Donacije/login',array('id'=>'forma','name'=>'forma','class'=>'form-horizontal','method'=>'GET'));
                            echo form_label('Korisnicko ime:','tbKorIme'); // 2. parametar f-je je id polja na koje se odnosi labela
                            echo form_input(array('id'=>'tbKorIme','name'=>'tbKorIme', 'class'=>'form-control'));
                            echo form_label('Lozinka:','tbLozinka');
                            echo form_password(array('id'=>'tbLozinka','name'=>'tbLozinka','class'=>'form-control'));
                            echo form_submit(array('id'=>'btnLogovanje','name'=>'btnLogovanje','class'=>'btn btn-danger', 'value'=>'Uloguj se'));
                            echo form_close();
                        }
                        else
                        {
                            ?>
                            <a href="<?php echo base_url();?>Donacije/logout" id="ajaxDugme">Izlogujte se</a>
                    <?php
                        }
                    ?>
              
               
</section> 
           <div id="ajaxPrikaz"></div>
      </div>
    </div>
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <h1>Ako zelite da budete jedan od nasih donatora, molimo vas ulogujte se da biste videli formu za placanje.</h1>
      <p><!--ovde ide neki tekst --></p>
      
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