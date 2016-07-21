<?php $this->layout('layout', ['title' => 'Ajouter un Employé | Oo !']) ?>

<?php $this->start('main_content') ?>
	<h2>form and method to insert a new employed or client just admin can insert employeds  .</h2>
	<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>
	
	
<?php $this->stop('main_content') ?>