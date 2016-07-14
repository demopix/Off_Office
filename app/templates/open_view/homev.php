<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
	<h2>Home</h2>
	<br>
	<p> Claims chose one valid id to simulate a user session</p>
	<form method="POST" action="<?= $this->url('Open_claim_add') ?>" >
		<input type="text" name="id">
		<button class="" type="submit">Envoyer!</button>
	</form>

	<br>
	<a href="<?= $this->url('back_office_contract_add') ?>">BackOffice add new contract</a>


<br>

<br>

<p> PDF generator chose one valid id to simulate a user session</p>
	<form method="POST" action="<?= $this->url('gen_gen_pdf') ?>" >
		<input type="text" name="id">
		<button class="" type="submit">Envoyer!</button>
	</form>

	<?php $this->stop('main_content') ?>