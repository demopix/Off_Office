<?php $this->layout('layout', ['title' => 'Back Office | Oo !']) ?>

<?php $this->start('main_content') ?>


  
  <a class="btn btn-info" href="<?=$this->url("back_office_contract_add");?>">Ajouter un nouvel contrat</a>
  <?php if ($w_user['role']== 'ADM'):?> 
  <a class="btn btn-danger" href="<?=$this->url("admin_employ_add");?>">Ajouter un nouvel employé</a>
  <?php endif;?> 
  <a class="btn btn-info" href="<?=$this->url("admin_employ_add");?>">Ajouter un nouvel Client</a>
    <a class="btn btn-info" href="<?=$this->url("planning_planning");?>">Planning</a>
  <br>


<ul class='list-group'>
<li class="list-group-item list-group-item-danger"><span class="badge"><?=$countC; ?></span><a href="<?=$this->url("backoffice_main",['e'=>'List']);?>">Clients list</a></li>
    <li class="list-group-item"><span class="badge"><?=$countE; ?></span>  <a href="<?=$this->url("backoffice_main", ['e'=>'Employeds']);?>">Employeds liste</a></li></ul>
  
   
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
              <td><?=$emp['role'];?></td>
              <td><?=$emp['employ_email'];?></td>
              <td><?=$emp['department'];?></td>
              <td><form method="POST" action="<?= $this->url('open_c_details') ?>" >
    <input type="hidden" name="u_email" value="<?=$c['users_user_email'];?>">
    <button class="btn btn-warning" type="submit">details</button>
  </form></td>
              <?php if ($w_user['role']== ''):?> 
              <td><a class="btn btn-danger" href="<?=$this->url("backoffice_main", ['e'=>'Employeds']);?>">supprimer</a></td>
              <?php endif;?> 
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
              <td><form method="POST" action="<?= $this->url('open_c_details') ?>" >
    <input type="hidden" name="u_email" value="<?=$c['users_user_email'];?>">
    <button class="btn btn-warning" type="submit">details</button>
  </form></td>
            </tr> <?php endforeach;?>
          </tbody>

        <?php endif ?>
        </table>

  


  
<?php $this->stop('main_content') ?>