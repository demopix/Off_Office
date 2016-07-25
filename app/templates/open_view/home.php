<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
	


<h3>Admin and Employed functionalities</h3>
<br>
   <a class="btn btn-success" href="<?=$this->url("admin_login");?>"> Login Back Office</a>
   <br> 
   <p>show this button only when employed is logged else redirect to backoffice/login</p>

	<a class="btn btn-info" href="<?=$this->url("backoffice_main",['e'=> 'Main']);?>">Back Office</a> -> url = Off_Office/backoffice


	



	<?php $this->stop('main_content') ?>

