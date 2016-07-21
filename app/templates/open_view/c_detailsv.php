<?php $this->layout('layout', ['title' => 'Details clients']) ?>

<?php $this->start('main_content')?>

<?php 	
$id = $verify ['id'];
$fname = $verify ['user_fname'];
$lname = $verify ['user_lname'];
$userAdressP = $verify ['user_address'];
$userGen = $verify ['user_gender'];
$contractId = $verify ['contract_id'];
$cityId = $verify ['city_id'];
$countryId = $verify ['country_id'];
$userBDate = $verify ['user_bdate'];
$userPass = $verify ['user_password'];
$userTel = $verify ['user_tel'];
$dateReg = $verify ['date_registry'];
$userStat = $verify ['user_status'];
$userCond = $verify ['user_condition'];
$userMail = $verify ['user_email'];
?>

<form method="POST" class="form-horizontal">
     
 <table class="table table-bordered table-responsive">
    <tr>
     <td><label class="control-label">Nom de famille</label></td>
        <td><input class="form-control" type="text" name="user_lname" placeholder="<?php echo $verify ['user_lname']; ?>" />
       	</td>
    </tr>
    <tr>
    <td><label class="control-label">Prénom</label></td>
        <td><input class="form-control" type="text" name="user_fname" placeholder="<?php echo $verify ['user_fname']; ?>"  /></td>
    </tr>
    <td><label class="control-label">Adresse</label></td>
        <td><input class="form-control" type="text" name="user_address" placeholder="<?php echo $verify ['user_address']; ?>" /></td>
    </tr>
	    <td><label class="control-label">Region</label></td>
	    <td><input class="form-control" type="text" name="city_id" placeholder="<?php echo $verify ['city_id']; ?>" /><form method="" action="">
    <select name="regions">
        <option value="" selected="selected"></option>
        <option value="1">Luxembourg </option>
        <option value="2">Grevenmacher</option>
        <option value="3">Diekirch</option>
    </select>
    <input TYPE="submit" name="submit" />
</form>
</td>
    </tr>

    <td><label class="control-label">Sexe</label></td>
        <td><input class="form-control" type="text" name="user_gender" placeholder="<?php echo $verify ['user_gender']; ?>" /></td>
    </tr>
    <td><label class="control-label">Date de naissance</label></td>
        <td><input class="form-control" type="text" name="user_bdate" placeholder="<?php echo $verify ['user_bdate']; ?>" /></td>
    </tr>
    <td><label class="control-label">Numéro téléphone/GSM</label></td>
        <td><input class="form-control" type="text" name="user_tel"placeholder="<?php echo $verify ['user_tel']; ?>" /></td>
    </tr>
    <td><label class="control-label">Date inscription</label></td>verify
        <td><input class="form-control" type="text" name="date_registry" placeholder="<?php echo $verify ['date_registry']; ?>" /></td>
    </tr>
    <td><label class="control-label">E-mail</label></td>
        <td><input class="form-control" type="email" name="user_email" placeholder="<?php echo $verify ['user_email']; ?>"/>

       <label colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
       <span class="glyphicon glyphicon-save"></span> &nbsp;Confirmer votre selection
       </button>
       </td>
    </tr>
  </table>
</form>

<!--
<form action="POST">
  <br>
  <input placeholder="Login" type="text" name="firstname" value="">
  <br><br>
  <input placeholder="mot de passe" type="password" name="" value="">
  <br><br>
  <input placeholder="verifier mot de passe" type="password" name="" value="">
  <br><br>
  <input class="btn btn-success" type="submit" value="Update">
</form>

<div class="fluid-container"> -->

<!--<h2>list of all docs refering to this client </h2>
	<p>create form with place holders database rows<br>
	update ask for password before submition   <br>
	important! 2 rows  password <br>
	if get session employ or admin don't show password row </p>-->
	<br><br>
	if login = client rule button = <a class="btn btn-warning" href="<?=$this->url("open_e_client");?>"> < Espace de Client</a><br><br>

	if login = employee or admin rule button = <a class="btn btn-info" href="<?=$this->url("backoffice_main");?>">back office ></a>
<?php $this->stop('main_content') ?>