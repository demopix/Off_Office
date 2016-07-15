<?php $this->layout('layout', ['title' => 'Ajouter un Contract| Oo !']) ?>

<?php $this->start('main_content') ?>


	
	
<?php if (isset($c)): ?>
<?php if (!$c): ?>
<form method="post" action="<?= $this->url('back_office_contract_add')?>" enctype="multipart/form-data">
	    <input type="text" name="contract_num" readonly value="<?= $_POST['fetch_c'];?>" />
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
		<input type="number" name="adm_id" placeholder="admin id">
	    
	    <button type="submit" value="submit">submit</button>
</form>
<a href="<?= $this->url('back_office_contract_add') ?>">essayer à nouveau</a>

<?php else: ?>

<div class="container-fluid">
    <div class="row">
		<h2 class="sub-header">Contrat dèjà existent Nº : <?= $c['contract_num'];?></h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>                 
              <th>Nom</th>
              <th>Prenon</th>
              <th>Date du fin</th>
              <th>email Agent</th>
              <th>Email Client</th>
              <th>Type</th>
            </tr>
          </thead>            
          <tbody>
            <tr>                
              <td><?=$c['user_lname'];?></td>
              <td><?=$c['user_fname'];?></td>
              <td><?=$c['contract_end'];?></td>
              <td><?=$c['employ_email'];?></td>
              <td><?=$c['users_user_email'];?></td>
              <td><?=$c['contract_type'];?></td> 
            </tr>
          </tbody>           
        </table>
    </div>
<a href="<?= $this->url('back_office_contract_add') ?>">essayer à nouveau</a>
</div>

	
<?php endif ?>
<?php else: ?>


<h2>Ajouter un contrat </h2>
	<form method="post" action="<?=$this->url('back_office_contract_add')?>">
		<input type="search" name="fetch_c">
		<button>search</button>
    </form>
<?php endif ?>

	




	
<?php $this->stop('main_content') ?>