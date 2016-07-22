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
	<!--<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">-->
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
         <?php if($w_user['user_fname']=='' && $w_user['user_email'] == ''){?>
         <li><a href="<?=$this->url("users_login");?>">Signup</a></li>
 		</ul>

          <form class="navbar-form navbar-right" action="<?=$this->url("users_loginPost")?>" method="POST">
             <input class="form-control" type="text" name="username" placeholder="email">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="btn btn-primary" type="submit" value="Login">
        </form> 
     	<?php }else{?>
     		<li><a href="#">bonjour <?= $w_user['user_fname']; ?></a></li>
          <li><a class="btn btn-danger" href="<?=$this->url("users_logout");?>">logout</a></li> </ul>
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
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>