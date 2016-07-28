<?php $app = getApp(); $dir = $app->getConfig('security_user_table'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= $this->assetUrl('img/offoffice.png') ?>" type="image/x-icon" />
	<title><?= $this->e($title) ?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/examples/dashboard/dashboard.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!---->
<<<<<<< HEAD
<?php if($dir == 'admin'):?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/backoffice_style.css') ?>">
=======

<?php if($dir == 'admin'):?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/backoffice_style.css') ?>">
<?php else : ?>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/public-style.css') ?>">

>>>>>>> check-in-Demetrio
<?php endif;?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
          <a class="navbar-brand" href="<?=$this->url("home");?>"><img src="<?= $this->assetUrl('img/offoffice.png') ?>" width="25"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         <!-- <li><a href="about.php">À propos de nous</a></li> -->
<<<<<<< HEAD
         <li><a class="" href="<?=$this->url("open_verification", ['fetch_c'=>'1']);?>">Verify</a></li>
         <?php if($w_user['role']=='' && $w_user['id'] == ''){?>
=======
         <li><a class="" href="<?=$this->url("open_verification", ['fetch_c'=>'1']);?>">Vérification</a></li>
    <?php if($w_user['role']=='' && $w_user['id'] == ''){?>
>>>>>>> check-in-Demetrio
          <li><a class="" href="<?=$this->url("open_contact");?>">contact</a></li> 
    <?php if($dir == 'users'):?>
          <li><a href="<?=$this->url("users_login");?>">Signup</a></li>
    <?php endif;?>
 		</ul>
          
		
<?php if($dir == 'admin'):?>

	 <form class="navbar-form navbar-right" method="POST" action="<?=$this->url("admin_loginPost")?>">
             <input class="form-control" type="text" name="username" placeholder="username">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="btn btn-primary" type="submit" value="Login">
        </form> 
       
	
<?php else:?>
           	
           
          <form class="navbar-form navbar-right" method="POST" action="<?=$this->url("users_loginPost")?>">
             <input class="form-control" type="text" name="username" placeholder="email">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="btn btn-primary" type="submit" value="Login">
        </form> 
<?php endif; }else{?>
<<<<<<< HEAD
     	  
          <li><a class="" href="<?=$this->url("open_e_client");?>">Espace de Client</a></li> 
        <?php if ($dir == 'users') {?>
        <li><a href="#">bonjour <?= $w_user['user_fname']; ?></a></li>
      <?php   } if ($dir == 'admin') {?>
      	<li><a href="#">bonjour <?= $w_user['employ_name']; ?></a></li>     <?php } ?>
=======
     	<?php if ($dir == 'users') {?>  
          <li><a class="" href="<?=$this->url("open_e_client");?>">Espace de Client</a></li> 
          <li><a href="#">bonjour <?= $w_user['user_fname']; ?></a></li>
     
<?php   } if ($dir == 'admin') {?>
	    <li><a class="" href="<?=$this->url("backoffice_main",['e'=> 'Main']);?>">Back Office</a> </li> 
      	<li><a href="#">bonjour <?= $w_user['employ_name']; ?></a></li>  
      	   <?php } ?>
>>>>>>> check-in-Demetrio
     	  
          <li><a class="btn btn-danger" href="<?=$this->url("users_logout");?>">logout</a></li>
    </ul>
		<?php }?>
      </div>
    </div></nav>
	<div>
	 
	</div>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>
		</header>

		<section>
<<<<<<< HEAD
		<?php $app = getApp();
		
		 $ns = $app->getConfig('security_email_property');
debug($ns);
	?>
=======
		
>>>>>>> check-in-Demetrio
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>