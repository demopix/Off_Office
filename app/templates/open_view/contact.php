<?php $this->layout('layout', ['title' => 'Contact !']) ?>

<?php $this->start('main_content') ?>
   <link rel="stylesheet" href="<?= $this->assetUrl('css/custom.css') ?>"/>

            <div class="row">


                <div class="col-lg-8 col-lg-offset-2">

                   
                    <p class="lead">Veuillez remplir le formulaire de contact svp.</p>


                       <!--Affichage du formulaire-->


                  <form id="contact-form" method="post" action="<?= $this->url('open_contact'); ?>" role="form" data-toggle="validator" >

				    <div class=""></div>

				    <div class="controls">

				        <div class="row">
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_name">Firstname *</label>
				                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_lastname">Lastname *</label>
				                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_email">Email *</label>
				                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="form-group">
				                    <label for="form_phone">Phone</label>
				                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				        </div>
				        <div class="row">
				            <div class="col-md-12">
				                <div class="form-group">
				                    <label for="form_message">Message *</label>
				                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
				                    <div class="help-block with-errors"></div>
				                </div>
				            </div>
				            <div class="col-md-12">
				                <input type="submit" class="btn btn-success btn-send" value="Send message">
				            </div>
				        </div>
				      

				</form>
				

				   <div id="adresse" class="col-lg-12">
	    <strong>
	        <h6>Adresse de nos bureaux:<br/><br/>
	         OFFOFFICE<br/>
	        9 Rue des Hauts-fourneaux, 1719 Lëtzebuerg - Tel: 691 777 333   Email: offoffice.info@gmail.com - 
	        <br/>Horaires d'ouvertures: Lu-Ven: 9h00-17h00<br/>
	    </strong>
	  </h6>
	</div>
<br>


	
   
           
   
   
</div>
<div class="oo" id="map">
	
</div>
<div class="masthead segment">
  <div class="ui page grid">
    <div class="column">
           
    </div>
  </div>
</div>
</div>				
</div>
            <!--Affichage de la carte-->

          





	
    
     <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript">

    var marker;
    function initMap() {
      maCarte = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 49.633514, lng: 6.137630},
        zoom: 15
      });

      
    
    
            var marker = new google.maps.Marker({
            position: {lat: 49.633514, lng: 6.137630},
            map: maCarte,
            icon: "https://help.blackberry.com/en/blackberry-classic/10.3.1/help/mba1403630089474_hiresdevice_en-us.png",
            animation: google.maps.Animation.DROP,
            title: 'Technoport-Belval!'
          });
              marker.addListener('click', toggleBounce);

        }
        function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
    

    </script>

   
   
       <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdfipYKTyWEiJXhGSRos_HxVAaEcUQyuw&callback=initMap">
</script>
<?php $this->stop('main_content') ?>


