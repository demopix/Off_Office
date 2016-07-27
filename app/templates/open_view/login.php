<?php $this->layout('layout', ['title' => 'Login ou inscrivez-vous !']) ?>
<!-- Gabriela Fonseca-->
<?php $this->start('main_content') ?>
<script src="<?= $this->assetUrl('js/login.js') ?>"></script>
  <!--login et signup-->
	<div class="row">
    <div class="col-sm-4 col-sm-offset-4 l-form-1-box wow fadeInUp animated">    
      <div class="l-form-1-top">
        <div class="l-form-1-top-left">
          <h3>Login</h3>
          <p>Veuillez saisir votre identifiant et votre mot de passe:</p>
        </div>
        <div class="l-form-1-top-right">
          <i class="fa fa-lock"></i>
        </div>
      </div>
      <!--login-->
      <div class="l-form-1-bottom">
        <!-- formulaire de login-->
        <form id="loginUser" role="form" method="POST" action="<?=$this->url("users_loginPost")?>" class="form-group" >                        
          <div class="form-group">            
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input id="username" type="email" name="username" placeholder="mon_email@gmail.com" class="l-form-1-username form-control" id="username" value="">
              </div>
          </div>
          <div class="form-group">
            <label class="sr-only" for="l-form-1-password">Password:</label>
              <input type="password" name="pwd" placeholder="Password..." class="l-form-1-password form-control" id="password" value="">
          </div>
          <button id="subSession" type="submit" class="btn btn-success">Login!</button>          
          <button type="reset" class="btn btn-danger" id="right-label" value="Reset">Reinitialiser</button>
        </form>
        
        <a href="<?=$this->url("users_resetpass")?>">mot de passe oublié</a>
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-8 col-sm-offset-3"> 
        <h2>Signup</h2>
        <!--le sigup et possible seulement si le client a un contrat--> 
      
        <?php if (isset($c)): ?><!-- on teste si le client a deja un contract ou pas-->
        <?php if ($c):?> <!-- si le contract exist il montre le formulaire de signup, sinon ça demande un numero de contract valide-->
	       <form action="<?=$this->url("users_signupPost")?>" method="post" class="form-inline">		
      	   
           <div class="form-group has-ufeedback" style="margin:5px"> 
            <div>
              <input type="text" name="fname" value="<?= $c['user_fname'];?>" class="form-control" placeholder="Prenom"/>
                
                <input type="text" name="lname" value="<?= $c['user_lname'];?>" class="form-control" placeholder="Nom"/>   
                
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="text" name="email" value="<?= $c['users_user_email'];?>" disable class="form-control" placeholder="email"/>
                </div>
                <input type="hidden" name="id" value="<?= $c['id'];?>" disable /> <!-- le id du contract et cache mais il et chargé dans la base de donées bien comme les autres elements caches--> 
            </div>
                
            </div>
            <div class="form-group" style="margin:5px">
            
              <input type="local" name="adress" class="form-control" placeholder="Address">
             
              <input type="local" name="city" value="" class="form-control" placeholder="ville">
              
              <input type="local" name="pCode" value="" disable class="form-control" placeholder="Code_Postal" />
            </div>
            <div class="form-group" style="margin:5px">
              <div class="radio">
                <strong>Sexe:</strong>
            
                M: <input type="radio" name="gender"  id="inlineRadio1" value="M">
                F: <input type="radio" name="gender" id="inlineRadio2" value="F">
        
              </div>
              <div>
                <strong>Date de naissance:</strong>
                <input type="date" name="bdate" Class="form-control">
                
                <input type="tel" name="phone" class="form-control" placeholder="Telephone"> 
              </div>
            
            </div> 

            <div class="form-group" style="margin:5px">
             
              <input type="password" name="pwd" value="" placeholder="pass1" class="form-control"/>
              
              <input type="password" name="pwd2" placeholder="pass2" class="form-control"/>     
              
              <button type="submit" value="submit">Send</button>
            </div>
            
          </form> 
        </div>
       
      <?php endif ?>
      <?php else: ?>
  <div class="col-md-6 col-sm-offset-1">
    <p>Inserer un numero de contrat valide: </p>
    <form method="post" action="<?=$this->url("users_signupPost")?>" >
      <input type="search" name="fetch_c" class="form-control">
      <button>search</button>
    </form>
      <?php endif ?>
  </div>


<?php $this->stop('main_content') ?>