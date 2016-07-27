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
<div class="col-lg-6">
  <form method="post" action="<?=$this->url('open_verification')?>">
    <div class="input-group input-group-lg">
    <input class="form-control" type="search" name="fetch_c">
    <span class="input-group-btn"><button class='btn btn-default'>search</button>
    </span></div>
    </form>
    </div>
<?php endif ?>

  

<?php $this->stop('main_content') ?>