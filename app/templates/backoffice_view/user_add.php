<?php
<<<<<<< HEAD
if ($w_user['role']== 'user'){
 $this->layout('layout', ['title' => 'Ajouter un Employé | Oo !']);
 }
 if ($w_user['role']== ''){
=======
if ($w_user['role']== 'ADM'){
 $this->layout('layout', ['title' => 'Ajouter un Employé | Oo !']);
 }
 if ($w_user['role']== 'EMP'){
>>>>>>> check-in-Demetrio
 $this->layout('layout', ['title' => 'Ajouter un Client | Oo !']);
 } ?>


<<<<<<< HEAD

<?php $this->start('main_content') ?>
<section>
<hr>
<?php if ($w_user['role']== 'admin'): ?>
              <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 l-form-1-box wow fadeInUp animated">
 <form name="insertion" id="identicalForm" class="form-horizontal fv-form fv-form-bootstrap" role="form" action="insert.php" method="POST" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
    <div class="form-group has-feedback">
        <div class="col-md-4">
            <input type="text" class="form-control" id="nom" name="employed_name" required="" placeholder="Nom" data-fv-field="employed_name">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="employed_name" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
=======
<?php $this->start('main_content') ?>

<section> 

<script type="text/javascript">
$( document ).ready(function() {
 //   console.log( "ready!" );

    $('#email').keyup(function() {
            if ( $( "#enom" ).val() != '' && $( "#email" ).val()!= '' ) 
            {
               $("#subEmploy").prop('disabled', false);
            }
            else{
              $('#subEmploy').prop('disabled', true);
            }
    }).keyup();

    $( "#identicalForm" ).submit(function( event ) {
      console.log( "Handler for .submit() called." + $(this).attr('action')  );

        if ( $( "#enom" ).val() != '' && $( "#email" ).val()!= '' ) {
            $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data : $(this).serialize(),
                    success: function(response) {

                      if(response === "l\'employé a bien été enregistrée"){
                      $("small#help-employn").css({"display": "block","backgroundColor" :"rgba(0, 128, 0, 0.77)"}).text(response);
                      }else{

                     
                      $("small#help-employn").css("display", "block").text(response);
                      }                 
                    },
                    error: function() {
                            alert("error de connextion");
                    }
                }); 

              event.preventDefault();
              return;
        }
    });

    $("#retour").click(function(){
     $("small#help-employn").hide( "slow" );                 
    });
    
});
  </script>
  <style type="text/css">
   small#help-employn {
    color: white;
    font-size: xx-large;
    text-align: center;
    background-color: rgba(19, 18, 18, 0.76);
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 1000;
    top: 0;
    left: 0;
    border-radius: 5px;
    text-shadow: 1px 1px #292323;
    padding-top: 10%;
}  </style>

<hr>
<?php if ($w_user['role']== 'ADM'): ?>
              <div class="row">
  <a id="retour" href="#"><small id="help-employn" style="display: none;"></small></a>                  
 <form name="insert_employ" id="identicalForm" class="form-horizontal" role="form" action="<?=$this->url("admin_employ_add");?>" method="POST" >
    <div class="form-group has-feedback">
        <div class="col-md-4">
            <input type="text" class="form-control" id="enom" name="employ_name"  placeholder="Nom"/>
        </div>
>>>>>>> check-in-Demetrio
       
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon">@</span>
<<<<<<< HEAD
            <input type="email" class="form-control" id="mail" name="employed_email" required="" placeholder="Email " data-fv-field="employed_email">
        </div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="email" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="fname" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="lname" style="display: none;"></i><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small><small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
=======
            <input type="text" class="form-control" id="email" name="employ_email"  placeholder="Email " />
        </div>
        </div>
>>>>>>> check-in-Demetrio

    </div>
    <div class="form-group has-feedback">
       
        <div class="col-md-4">
           <input type="text" class="form-control" name="department" placeholder="Département">
        </div> 
          <div class="col-md-4">
<<<<<<< HEAD
            <input type="text" class="form-control" name="rule" required="" placeholder="role" data-fv-field="rule">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="address" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
=======
          <div class="btn-group" data-toggle="buttons">
<label class="btn btn-warning ">
<input type="radio" name="role" id="option1" value="ADM" data-fv-field="role"> Admin
</label>
<label class="btn btn-success ">
<input type="radio" name="role"  class="form-control" id="option2" value="EMP" data-fv-field="role"> Employé
</label>
<label class="col-md-7" >
<input type="text" class="form-control" name="cns" placeholder="Nº CNS Employé">
</label>
<!--             <input type="text"  name="role"  placeholder="role" data-fv-field="role"> -->
        
        </div>
>>>>>>> check-in-Demetrio
        </div>
        <br>
        <div class="col-md-8">
        <br>
  
<<<<<<< HEAD
        <button class="btn btn-primary" id="sendMessage" type="submit" value="insérer">Envoyer</button>
=======
        <button class="btn btn-primary" id="subEmploy" type="submit" value="insérer">Envoyer</button>
>>>>>>> check-in-Demetrio
</div>
      </div>
    </form>

<<<<<<< HEAD
       
   <?php else: ?>
              
=======
       </div>
       <h1>Ajouter un Client | Oo !</h1>
<hr>

   <?php endif; ?>
     <?php if ($w_user['role']== 'EMP' || $w_user['role']== 'ADM'): ?>         
>>>>>>> check-in-Demetrio
              
                      <!-- end form insert employed ################################ -->

                      <!-- start form insert client################################## -->
                                              <div class="row">
    
<<<<<<< HEAD
 <form name="insertion" id="identicalForm" class="form-horizontal fv-form fv-form-bootstrap" role="form" action="insert.php" method="POST" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
=======
 <form name="client" id="ClienForm" class="form-horizontal fv-form fv-form-bootstrap" role="form" action="insert.php" method="POST" novalidate="novalidate">
>>>>>>> check-in-Demetrio
    <div class="form-group has-feedback">
        <div class="col-md-4">
            <input type="text" class="form-control" id="nom" name="lname" required="" placeholder="Nom" data-fv-field="lname">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="lname" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="Prenom" name="fname" required="" placeholder="Prenom" data-fv-field="fname">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="fname" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon">@</span>
            <input type="email" class="form-control" id="mail" name="email" required="" placeholder="Address Email " data-fv-field="email">
        </div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="email" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="fname" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="lname" style="display: none;"></i><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small><small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>

    </div>
    <div class="form-group has-feedback">
        <div class="col-md-4">
            <input type="text" class="form-control" name="address" required="" placeholder="nº , rue " data-fv-field="address">
<<<<<<< HEAD
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="address" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
=======
        </div>
>>>>>>> check-in-Demetrio
        <div class="col-md-4">
           <input type="text" class="form-control" name="pin" placeholder="Code postal"></div> 
       
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" name="city" required="" placeholder="Ville" data-fv-field="city">
<<<<<<< HEAD
        </div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="city" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="address" style="display: none;"></i><small class="help-block" data-fv-validator="notEmpty" data-fv-for="city" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
=======
        </div></div>
>>>>>>> check-in-Demetrio
    </div>


    <div class="row">


         <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span> </span>
            <input type="text" class="form-control" name="tel" placeholder="Téléphone">
        </div></div>
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" name="pwd" placeholder="Password ">
        </div></div>

           
        <div class="col-lg-4">
          <div class="input-group">        
          <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<<<<<<< HEAD
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password " data-fv-field="confirmPassword"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="confirmPassword" style="display: none;"></i>
        </div><small class="help-block" data-fv-validator="identical" data-fv-for="confirmPassword" data-fv-result="NOT_VALIDATED" style="display: none;">Les mots de passe ne correspondent pas</small></div>
=======
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password " data-fv-field="confirmPassword">
        </div></div>
>>>>>>> check-in-Demetrio
      
    </div><br>
  
        <button class="btn btn-primary" id="sendMessage" type="submit" value="insérer">Envoyer</button>


    </form></div>
<<<<<<< HEAD
    <?php endif ?>

                      <div class="l-form-1-social-login-buttons">
                          <a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'Main']);?>"> < Back Office</a> <a class="btn btn-link-2" target="_blank" href="https://www.facebook.com">
                            <i class="fa fa-facebook"></i> Facebook
                          
                      </div>
                    </div>
                </div>
=======
    <?php endif ?><br>

                      <div class="row">
                          <a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'Main']);?>"> < Back Office</a> 
                          
                      </div>
                    
                
>>>>>>> check-in-Demetrio
          </section>
  

  
<<<<<<< HEAD
  
<?php $this->stop('main_content') ?>
=======
   
<?php $this->stop('main_content') ?>



>>>>>>> check-in-Demetrio
