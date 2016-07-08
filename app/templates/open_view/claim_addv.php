<?php $this->layout('layout', ['title' => 'Sinistres !']) ?>

<?php $this->start('main_content') ?>
	<h1>Upload a file</h1>

<form method="POST" action="" enctype="multipart/form-data">
     <!-- On limite le fichier à 100000Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
     Fichier : <input type="file" name="avatar">
     <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>
<?php $this->stop('main_content') ?>