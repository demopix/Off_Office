<?php $this->layout('layout', ['title' => 'Sinistres']) ?>

<?php $this->start('main_content') ?><br>

	<h1>Upload a file</h1>
	<br>
Nom de famille: <?php echo $contracts['user_lname']?><br />
Prénom: <?php echo $contracts['user_fname']?><br />
Numéro de Contrat: <?php echo $contracts['contract_num']?><br />
Fin de Contrat: <?php echo $contracts['contract_end']?><br />
Type de Contrat: <?php echo $contracts['contract_type']?><br />
E-mail: <?php echo $contracts['employ_email']?><br />
Répertoire du Contrat: <?php echo $contracts['user_dir']?><br />
<br>
<form method="POST" action="<?= $this->url('open_claim_add') ?>" enctype="multipart/form-data">
     <!-- On limite le fichier à 100000Ko -->
     
     <input type="hidden" name="id" value="<?php echo $contracts['id']?>">
     Fichier : <input type="file" name="avatar"><br><br>
     <input type="submit" class="btn btn-success" name="envoyer" value="Envoyer le fichier">
</form>



<?php $this->stop('main_content') ?>