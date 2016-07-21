<?php $this->layout('layout', ['title' => 'Espace de Client !']) ?>

<?php $this->start('main_content') ?>
	<br>
	<p> Claims chose one  valid contract id to simulate a user session and upload files and img's</p>
	<form method="POST" action="<?= $this->url('open_claim_add') ?>" >
		<input type="text" name="id">
		<button class="btn btn-warning" type="submit">Envoyer!</button>
	</form>
	<br>
   <p> Generate PDF chose one  valid contract id to simulate a user session</p>
	<a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=>1]);?>">josias namorango Print</a>
	<a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=>1, 'pdf_mail'=>'pdf_atchm']);?>">josias namorango Send email</a>
	<br>
	<br>
    <a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=>10]);?>">Print flamel </a>
    <a class="btn btn-warning" href="<?=$this->url("gen_gen_pdf", ['id'=>10, 'pdf_mail'=>'pdf_atchm']);?>">Send email flamel</a>
    <br>
    <br>
    <br> show and update client details 
    <br>
	<a class="btn btn-warning" href="<?=$this->url("open_c_details", ['id'=>1]);?>">details</a>
	
<br>
	
<?php $this->stop('main_content') ?>