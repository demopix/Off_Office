<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
	<h3>Public functionalities</h3>
	<a class="btn btn-success" href="<?=$this->url("open_verification", ['id'=>1]);?>">Verify</a>
	<a class="btn btn-success" href="<?=$this->url("users_login");?>">Signup & Login</a>
	<a class="btn btn-success" href="<?=$this->url("open_contact", ['id'=>1]);?>">contact</a>
	<br>
	
    <h3>Client functionalities</h3>
    <a class="btn btn-warning" href="<?=$this->url("open_e_client");?>">Espace de Client</a>
	<br>


<h3>Admin and Employed functionalities</h3>
<br>
   <a class="btn btn-success" href="<?=$this->url("admin_login");?>"> Login Back Office</a>
   <br> 
   <p>show this button only when employed is logged else redirect to backoffice/login</p>

	<a class="btn btn-info" href="<?=$this->url("backoffice_main");?>">Back Office</a> -> url = Off_Office/backoffice


	



	<?php $this->stop('main_content') ?>


