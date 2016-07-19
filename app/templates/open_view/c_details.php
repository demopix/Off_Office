<?php $this->layout('layout', ['title' => 'Details !']) ?>

<?php $this->start('main_content') ?>
if login = client rule button = <a class="btn btn-warning" href="<?=$this->url("open_e_client");?>"> < Espace de Client</a> if login = employ or admin rule button = <a class="btn btn-info" href="<?=$this->url("backoffice_main");?>">back office ></a>
	<h2>list of all docs refering to this client </h2>
	<p>create form with place holders database rows<br>
	update ask for password before submition   <br>
	important! 2 rows  password <br>
	if get session employ or admin don't show password row </p>
	
<?php $this->stop('main_content') ?>