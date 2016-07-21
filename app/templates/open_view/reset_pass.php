<?php $this->layout('layout', ['title' => 'Réinitialiser un mot de passe !']) ?>

<?php $this->start('main_content') ?>
	<form action="" method="post">
		<fieldset>
			<legend>Password forgotten ?</legend>
			<input type="email" name="user_email" value="" placeholder="Your email address"><br>
			<input type="submit" value="Get my password">
		</fieldset>
	</form>
	<br>
	<a class="btn btn-success" href="<?=$this->url("users_login");?>">Login</a>
<?php $this->stop('main_content') ?>