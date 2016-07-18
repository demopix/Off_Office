<?php $this->layout('layout', ['title' => 'Back Office | Oo !']) ?>

<?php $this->start('main_content') ?>


  
  <a class="btn btn-info" href="<?=$this->url("back_office_contract_add");?>">Ajouter un nouvel contrat</a>
  <a class="btn btn-info" href="<?=$this->url("admin_employ_add");?>">Ajouter un nouvel Client</a>
  <a class="btn btn-danger" href="<?=$this->url("admin_employ_add");?>">Ajouter un nouvel employé</a>
  <a class="btn btn-info" href="<?=$this->url("planning_planning");?>">Planning</a>
  <br>

only Admin can see action Delete on Employeds!
<ul class='list-group'>
<li class="list-group-item list-group-item-danger"><span class="badge"><?=$countC; ?></span><a href="<?=$this->url("backoffice_list",['e'=>'List']);?>">Clients list</a></li>
    <li class="list-group-item"><span class="badge"><?=$countE; ?></span>  <a href="<?=$this->url("backoffice_list", ['e'=>'Employeds']);?>">Employeds liste</a></li></ul>
	
   
     <div class="table-responsive">
                     <table class="table table-striped">
<?php if ($e):?>
		 <thead>
		 	<tr> 
              <th>Id</th>                
              <th>Nom</th>
              <th>Niveau Auth</th>
              <th>Email</th>
              <th>Departement</th>
              <th>Action</th>
            </tr>
          </thead>            
          <tbody><?php foreach ($employL as $emp): ?>
            <tr>                
              <td><?=$emp['id'];?></td>
              <td><?=$emp['employ_name'];?></td>
              <td><?=$emp['employ_rule'];?></td>
              <td><?=$emp['employ_email'];?></td>
              <td><?=$emp['department'];?></td>
              <td><a class="btn btn-danger" href="<?=$this->url("backoffice_main");?>">supprimer</a></td>

            </tr>
        <?php endforeach;?>
          </tbody>
        <?php else: ?>
         <thead>
            <tr>                 
              <th>Nom</th>
              <th>Prenon</th>
              <th>nº du contrat</th>
              <th>Date du fin</th>
              <th>email Agent</th>
              <th>Email Client</th>
              <th>Type</th>
            </tr>
          </thead>            
          <tbody><tbody><?php foreach ($clientL as $c): ?>
            <tr>                
              <td><?=$c['user_lname'];?></td>
              <td><?=$c['user_fname'];?></td>
              <td><?=$c['contract_num'];?></td>
              <td><?=$c['contract_end'];?></td>
              <td><?=$c['employ_email'];?></td>
              <td><?=$c['users_user_email'];?></td>
              <td><?=$c['contract_type'];?></td> 
              <td><a class="btn btn-info" href="<?=$this->url("open_c_details",['id'=>1]);?>">details</a></td>
            </tr> <?php endforeach;?>
          </tbody>

        <?php endif ?>
        </table>

	


	
<?php $this->stop('main_content') ?>