<?php $this->layout('layout', ['title' => 'Espace de Client !']) ?>

<?php $this->start('main_content') ?>
	<br>
	<p> Claims chose one  valid contract id to simulate a user session and upload files and img's</p>
	<form method="POST" action="<?= $this->url('open_claim_add') ?>" >
		<input type="hidden" name="id" value="<?= $w_user['contract_id'];?>">
		<button class="btn btn-warning" type="submit">Demande de sinistre</button>
	</form>
	<br>
   <p> Générer un certificat d'assurance </p>
	<a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=> $w_user['contract_id'],'pdf_mail'=>'Imprimer']);?>">Imprimer mon certificat d'assurance</a>
	<a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=>$w_user['contract_id'] ,'pdf_mail'=>'Envoyer']);?>">Envoier par email</a>
	<br>
	<br>
   
    <br> show and update client details 
    <br>
    <form method="POST" action="<?= $this->url('open_c_details') ?>" >
		<input type="hidden" name="u_email" value="<?= $w_user['user_email'];?>">
		<button class="btn btn-warning" type="submit">details</button>
	</form>
<br>
<?php $this->stop('main_content') ?>