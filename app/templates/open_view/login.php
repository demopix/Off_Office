<?php $this->layout('layout', ['title' => 'Login ou inscrivez-vous !']) ?>

<?php $this->start('main_content') ?>
	<h2>login</h2>
	<br> <p>fist show form insert your contract number <br>
	if this a valid contract, automatically fills in the fields fname, lname, email and  use  hidden inputs to pass user_condition, user_status and contact_id<br>
	obs:user_condition, user_status and = 1 in both fields </p>
	<h2>inscrivez-vous</h2>
	<a class="btn btn-success" href="<?=$this->url("home");?>">Home</a>

	
<?php $this->stop('main_content') ?>