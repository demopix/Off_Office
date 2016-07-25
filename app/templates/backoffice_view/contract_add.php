<?php $this->layout('layout', ['title' => 'Ajouter un Contract| Oo !']) ?>

<?php $this->start('main_content') ?>


  
  
<?php if (isset($c)): ?>
<?php if (!$c): ?>
<form method="post"  class="form-horizontal fv-form fv-form-bootstrap" role="form" action="<?= $this->url('back_office_contract_add')?>" enctype="multipart/form-data">
    
<!--  Start row 1 # # # # # # # # #  --> 
    <div class="form-group has-feedback">
    <!--  field cotract nº read only --> 
        <div class="col-md-4">
          <input type="text" class="form-control"   name="contract_num" readonly value="<?= $_POST['fetch_c'];?>" />
          <small class="help-block" data-fv-validator="notEmpty" data-fv-for="employed_name" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
        </div>
       <!--  field first name --> 
        <div class="col-md-4">
          <input type="name" class="form-control"  name="fname"/ placeholder="Prenom">
        </div>
        <!--  field last name --> 
        <div class="col-md-4">
          <input type="name" class="form-control"  name="lname" placeholder="Nom" />
        </div>
    </div>
<!--  End row 1 ################### --> 
<!--  Start row 2 # # # # # # # # # -->
    <div class="form-group has-feedback">
         <!--  field email with js handler bootstrap --> 
         <div class="col-lg-4">
          <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control"  name="user_email" placeholder="email utilisateur" />
               <i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="email" style="display: none;"></i>
               <i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="fname" style="display: none;"></i>
               <i class="form-control-feedback fv-icon-no-label fv-bootstrap-icon-input-group" data-fv-icon-for="lname" style="display: none;"></i>
               <small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small>
               <small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
          </div>     
        </div>
  <!--  field contact type  --> 
    <div class="col-lg-4">
      Home Protect
      <input type="checkbox" class="checkbox-inline" name="contract_type" value="Home protect"/>
      Easy Auto 
      <input type="checkbox" class="checkbox-inline" name="contract_type" value="Easy auto"/>
    </div> 
 
    <div class="col-md-2">
      <input type="file"  name="fileUp"/>
    </div>
  
  <div class="col-md-2"> 
    Date du fin
    <input type="date"   name="contract_end"/>
    </div>
   </div>   
    <input type="hidden" name="adm_id" value="1">
<!--  End row 2 ################### --> 
<!--  Start row 2 # # # # # # # # # -->
      
      <button type="submit" class="btn btn-primary" value="submit">Envoyer</button>
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
<br>
<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>

  




  
<?php $this->stop('main_content') ?>