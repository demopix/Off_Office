<?php $this->layout('layout', ['title' => 'Details clients']) ?>
<?php $app = getApp(); $dir = $app->getConfig('security_user_table'); ?>

<?php $this->start('main_content')?>

<?php 	
$id = $verify ['id'];
$fname = $verify ['user_fname'];
$lname = $verify ['user_lname'];
$userAdressP = $verify ['user_address'];
$userGen = $verify ['user_gender'];
$contractId = $verify ['contract_id'];
$cityName = $verify ['city_name'];
$userBDate = $verify ['user_bdate'];
$userPass = $verify ['user_password'];
$userTel = $verify ['user_tel'];
$dateReg = $verify ['date_registry'];
$userStat = $verify ['user_status'];
$userCond = $verify ['user_condition'];
$userMail = $verify ['user_email'];

//debug ($verify);
?>

<!-- Formulaire récupérant les données de la base de donnée pour que l'utilisateur/le client puissse les modifier
(exception: les champs qui sont mis en readonly! -->
<form method="POST" class="form-horizontal">   
 <table class="table table-bordered table-responsive">
    <tr>
     <td><label class="control-label">Nom de famille</label></td>
      <!-- Le readonly sur le placeholder permet de bloquer le champ pour que l'utilisateur ne puisse pas le modifier-->
        <td><input class="form-control" type="text" name="user_lname" readonly placeholder="<?php echo $verify ['user_lname']; ?>" />
       	</td>
    </tr>
    <tr>
    <td><label class="control-label">Prénom</label></td>
        <td><input class="form-control" type="text" name="user_fname" readonly placeholder="<?php echo $verify ['user_fname']; ?>"  /></td>
    </tr>
    <td><label class="control-label">Adresse</label></td>
        <td><input class="form-control" type="text" name="user_address" placeholder="<?php echo $verify ['user_address']; ?>" /></td>
    </tr>
	    <td><label class="control-label">Ville</label></td>
	    <td><input class="form-control" type="text" name="city_name" placeholder="<?php echo $verify ['city_name']; ?>" />
    </td>
    </tr>
    <td><label class="control-label">Sexe</label></td>
        <td><input class="form-control" type="text" name="user_gender" placeholder="<?php echo $verify ['user_gender']; ?>" /></td>
    </tr>
    <td><label class="control-label">Date de naissance</label></td>
        <td><input class="form-control" type="text" name="user_bdate" placeholder="<?php echo $verify ['user_bdate']; ?>" /></td>
    </tr>
    <td><label class="control-label">Numéro téléphone/GSM</label></td>
        <td><input class="form-control" type="text" name="user_tel" placeholder="<?php echo $verify ['user_tel']; ?>" /></td>
    </tr>
    <td><label class="control-label">Date inscription</label></td>
        <td><input class="form-control" type="text" name="date_registry" readonly placeholder="<?php echo $verify ['date_registry']; ?>" /></td>
    </tr>
    <td><label class="control-label">E-mail</label></td>
        <td><input class="form-control" type="email" name="user_email" readonly placeholder="<?php echo $verify ['user_email']; ?>"/>
        <input class="form-control" type="hidden" name="u_email" value="<?php echo $verify ['user_email']; ?>"/>
        <br>
       <label colspan="2"><button value ="submit" type="submit" name="btnsave" class="btn btn-default">
       <span class="glyphicon glyphicon-save"></span>&nbsp; Confirmer votre selection
       </button>
       </td>
    </tr>
  </table>
</form> 



<br>
<br>
<!-- Les Bouttons ramenent le client ou le Admin à l'espace client ou le retourne au BackOffice-->
<?php if($dir == 'admin'):?>
  <a class="btn btn-info" href="<?=$this->url("backoffice_main");?>">Retourner au Back Office ></a>
<?php else : ?>
    <a class="btn btn-warning" href="<?=$this->url("open_e_client");?>">Retourner à l'Espace de Client</a><br><br>
<?php endif;?>


<?php $this->stop('main_content') ?>

