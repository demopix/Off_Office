<?php $this->layout('layout', ['title' => 'Planning | Oo !']) ?>

<?php $this->start('main_content') ?>
	<h2>add new entry in planning and see the iframe google calendar </h2>
	<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>
	
<?php $this->stop('main_content') ?>