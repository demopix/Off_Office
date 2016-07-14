<?php $this->layout('layout', ['title' => 'Ajouter un Contract| Oo !']) ?>

<?php $this->start('main_content') ?>


	
	<a href="<?= $this->url('back_office_contract_add', ['fetch_c' => 'll']) ?>">Détails</a>
	<form method="post" action="<?=$this->url('back_office_contract_add')//,['fetch_c' => $_POST['fetch_c']]?>">
		<input type="search" name="fetch_c">
		<button>search</button>
    </form>

<?php// if (!$c): ?>
<form method="post" action="<?= $this->url('back_office_contract_add')?>" enctype="multipart/form-data">
		    <input type="text" name="contract_num" />
			<input type="name" name="fname"/ placeholder="Prenom">
			<input type="name" name="lname" placeholder="Nom" />
			
			<input type="text" name="user_email" placeholder="email utilisateur" /><br>
		    Home Protect
			<input type="checkbox" name="contract_type" value="Home protect">
			Easy Auto 
			<input type="checkbox" name="contract_type" value="Easy auto">
			<input type="file" name="fileUp">
			Date du fin
			<input type="date" name="contract_end"/>
		    
		    <button type="submit" value="submit">submit</button>


<?php// else: ?>
	
	<h1>add contract</h1>
		

<p>write here the nº of contract and know if a register user </p>
		</form>
<?php// endif ?>
	




	
<?php $this->stop('main_content') ?>