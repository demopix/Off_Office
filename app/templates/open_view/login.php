<?php $this->layout('layout', ['title' => 'Login ou inscrivez-vous !']) ?>

<?php $this->start('main_content') ?>
	<!--login et sigup-->
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
        <form role="form" method="POST" action="<?=$this->url("users_loginPost")?>">                         
          <div class="form-group">
            <label class="sr-only" for="l-form-1-username">Email:</label>
              <input type="email" name="username" placeholder="mon_email@gmail.com" class="l-form-1-username form-control" id="l-form-1-username" value="">
          </div>
          <div class="form-group">
            <label class="sr-only" for="l-form-1-password">Password</label>
              <input type="password" name="pwd" placeholder="Password..." class="l-form-1-password form-control" id="l-form-1-password" value="">
          </div>
          <button type="submit" class="btn btn-green">Login!</button>          
          <button type="reset" class="btn btn-danger" id="right-label" value="Reset">Reinitialiser</button>
        </form>
        
        <a href="login.php?recovery=pass">mot de passe oublié</a>
      </div>
      <!--sigup-->  
      <div>
        <h2>Signup</h2>
        <!--le sigup et possible seulement si le client a un contrat--> 
        
        <?php if (isset($c)): ?>
		    <?php if ($c):?> 
		<form action="<?=$this->url("users_signupPost")?>" method="post">			
        	<!--<input type="text" name="contract_num" readonly value="" />-->
	        <!--<strong>Username</strong><br />
	        <input type="text" name="username" value="" /><br /><br />
	        <strong>Email</strong><br />-->
          <strong>First name:</strong>
          <input type="text" name="fname" value="<?= $c['user_fname'];?>"/></br>
          <strong>Last name:</strong>
          <input type="text" name="lname" value="<?= $c['user_lname'];?>"/>          
          <input type="hidden" name="id" value="<?= $c['id'];?>" disable /> <!-- le id du contract et cache mais il et chargé dans la base de donées bien comme les autres elements caches--></br>
          <strong>Address:</strong>
          <input type="text" name="adress"></br>
          <strong>City:</strong>
          <input type="text" name="city" value="<?= $c['id'];?>">
          <input type="hidden" name="cityid" value="<?= $c['id'];?>" disable /></br>
          <strong>Country:</strong>
          <input type="text" name="country" value="<?= $c['id'];?>">
          <input type="hidden" name="countryid" value="<?= $a['country_id'];?>" disable /><!-- remetre apres que le manager soit pret>     -->  </br>
          <strong>Gender:</strong></br>
          
            M: <input type="checkbox" name="gender" value="M"><br>
            F: <input type="checkbox" name="gender" value="F"><br>
        
          
          <strong>Birthdate:</strong>
          <input type="date" name="bdate"></br>
          
          <strong>Phone number:</strong>
          <input type="text" name="phone"></br>
          <strong>email:</strong>
	        <input type="text" name="email" value="<?= $c['users_user_email'];?>" disable/><br /><br />

	        <strong>Password</strong><br />  
	        <input type="password" name="pwd" value="" placeholder="pass1" /><br /><br />
	        <strong>Confirm Password</strong><br />
	        <input type="password" name="pwd2" placeholder="pass2" /><br /><br />         
          
	        <button type="submit" value="submit">Send</button>
        </form> 
      </div>
    </div>
  </div>
<?php endif ?>
<?php else: ?>
<h4>Inserer un numero de contrat valide: </h4>
	<form method="post" action="<?=$this->url("users_signupPost")?>">
		<input type="search" name="fetch_c">
		<button>search</button>
    </form>
<?php endif ?>
<br>	
<?php $this->stop('main_content') ?>