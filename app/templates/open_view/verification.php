<?php $this->layout('layout', ['title' => 'Vérification d\'un document !']) ?>

<?php $this->start('main_content') ?>
	
	
<?php if (isset($c)): ?>
<?php if (!$c): ?>
<h3>Le doncument est expire ou n'existe pas</h3>
<a href="<?= $this->url('open_verification') ?>">essayer à nouveau</a>

<?php else: ?>
<?php $insuredObj = ($c['contract_type'] == 'Home protect') ? 'Immeuble' : 'immatriculation' ; ?>
<div class="container-fluid">
    <div class="row">
		<h2 class="sub-header">Document existent Nº : <?= $c['contract_num'];?></h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>                 
              <th>Nom</th>
              <th>Prenon</th>
              <th>Date du fin</th>
              <th>email Agent</th>
             <th> <?= $insuredObj; ?></th>
              
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
<a href="<?= $this->url('open_verification') ?>">essayer à nouveau</a>
</div>

	
<?php endif ?>
<?php else: ?>


<h2>Ajouter un contrat </h2>
	<form method="post" action="<?=$this->url('open_verification')?>">
		<input type="search" name="fetch_c">
		<button>search</button>
    </form>
<?php endif ?>

<a class="btn btn-success" href="<?=$this->url("home");?>">Home</a>

	

<?php $this->stop('main_content') ?>