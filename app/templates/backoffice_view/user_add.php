<?php $this->layout('layout', ['title' => 'Ajouter un Employé | Oo !']) ?>



<?php $this->start('main_content') ?>
<section>
<hr>
<?php if (!$ses): ?>
              <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 l-form-1-box wow fadeInUp animated">
 <form name="insertion" id="identicalForm" class="form-horizontal fv-form fv-form-bootstrap" role="form" action="insert.php" method="POST" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
    <div class="form-group has-feedback">
        <div class="col-md-4">
            <input type="text" class="form-control" id="nom" name="employed_name" required="" placeholder="Nom" data-fv-field="employed_name">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="employed_name" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
       
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon">@</span>
            <input type="email" class="form-control" id="mail" name="employed_email" required="" placeholder="Email " data-fv-field="employed_email">
        </div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="email" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="fname" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="lname" style="display: none;"></i><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small><small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>

    </div>
    <div class="form-group has-feedback">
       
        <div class="col-md-4">
           <input type="text" class="form-control" name="department" placeholder="Département">
        </div> 
          <div class="col-md-4">
            <input type="text" class="form-control" name="rule" required="" placeholder="role" data-fv-field="rule">
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="address" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
        </div>
        <br>
        <div class="col-md-8">
        <br>
  
        <button class="btn btn-primary" id="sendMessage" type="submit" value="insérer">Envoyer</button>
</div>
      </div>
    </form>

       
   <?php else: ?>
              
              
                      <!-- end form insert employed ################################ -->

                      <!-- start form insert client################################## -->
                                              <div class="row">
    
 <form name="insertion" id="identicalForm" class="form-horizontal fv-form fv-form-bootstrap" role="form" action="insert.php" method="POST" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
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
        <small class="help-block" data-fv-validator="notEmpty" data-fv-for="address" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
        <div class="col-md-4">
           <input type="text" class="form-control" name="pin" placeholder="Code postal"></div> 
       
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" name="city" required="" placeholder="Ville" data-fv-field="city">
        </div><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="city" style="display: none;"></i><i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="address" style="display: none;"></i><small class="help-block" data-fv-validator="notEmpty" data-fv-for="city" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
    </div>


    <div class="row">


         <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><img src="images/ph.png" width="16"></span>
            <input type="text" class="form-control" name="tel" placeholder="Téléphone">
        </div></div>
        <div class="col-lg-4">
          <div class="input-group">
        <span class="input-group-addon"><img src="images/key.png" width="16"></span>
            <input type="password" class="form-control" name="pwd" placeholder="Password ">
        </div></div>

           
        <div class="col-lg-4">
          <div class="input-group">        
          <span class="input-group-addon"><img src="images/key.png" width="16"></span>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password " data-fv-field="confirmPassword"><i class="form-control-feedback fv-icon-no-label" data-fv-icon-for="confirmPassword" style="display: none;"></i>
        </div><small class="help-block" data-fv-validator="identical" data-fv-for="confirmPassword" data-fv-result="NOT_VALIDATED" style="display: none;">Les mots de passe ne correspondent pas</small></div>
      
    </div><br>
  
        <button class="btn btn-primary" id="sendMessage" type="submit" value="insérer">Envoyer</button>


    </form></div>
    <?php endif ?>

                      <div class="l-form-1-social-login-buttons">
                         	<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a> <a class="btn btn-link-2" target="_blank" href="https://www.facebook.com">
                            <i class="fa fa-facebook"></i> Facebook
                          
                      </div>
                    </div>
                </div>
          </section>
	

	
	
<?php $this->stop('main_content') ?>