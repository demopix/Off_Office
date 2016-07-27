<?php $this->layout('layout', ['title' => 'Réinitialiser un mot de passe !']) ?>

<?php $this->start('main_content') ?>
	

	<form method="post" action="">
	<fieldset>
		<legend>User password change</legend>
		<input type="password" name="user_password" placeholder="Your password" value=""><br>
		<input type="password" name="user_password2" placeholder="Confirm your password" value=""><br>
		<input type="submit" value="Change">
	</fieldset>
	</form>
	<a class="btn btn-success" href="<?=$this->url("users_login");?>">Login</a>
<?php $this->stop('main_content') ?>



