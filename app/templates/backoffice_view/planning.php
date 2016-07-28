<?php $this->layout('layout', ['title' => 'Planning | Oo !']) ?>

<?php $this->start('main_content') ?>
	<section>
		<div class="form-group">
			<h4 class="text-capitalize">inserer un nouveux event dans le planning et visualiser le dans calendrier google</h4>
			<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>
		</div>
	</section>
	<section>
		<div class="form-group"> 
	       	<!-- ce formulaire permetre de crier des events dans la calendriar de google api-->
			<form method="post" id="userForm" action="<?=$this->url("planning_task_add");?>">
				<div id="insertevent" class="col-md-4">
					<p>
						<strong>Titre de l'event: (*) </strong><span><input class="form-control" type="text" name="summary" placeholder="title du event"></span>
					</p>
					<p>
						<strong>localisation: (*) </strong><span><input class="form-control" type="text" name="local" placeholder="local du event"></span>
					</p>
					<p>
						<strong>description: </strong><span><input class="form-control" type="text" name="description" placeholder="description du event"></span>
					</p>
					<p>
						<strong>Date et heure du debut: </strong>
						<span>
							<input type="datetime-local" name="dateStart">
								        						
						</span>  
					</p>
					<p>
						<strong>Date et heure de la fin: </strong>
						<span>
							<input type="datetime-local" name="end">							
						</span>  
					</p>
					<p>
						<strong>Participants: </strong>
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input class="form-control" type="text" name="atendees" placeholder="email des invitees">
						</div>
					</p>
					<p>
						<!-- le buton submit envoy les donnes a l'api du google e te crie le event-->
						<strong><input type="submit" value="Add Event!" class="rsform-submit-button" /></strong>
						<strong><input type="submit" value="Delete Event" class="rsform-reset-button" /></strong>	
					</p>
				</div>     
			</form>	
			
			<div id='calendar' class="float-top-left" >
				<!-- le iframe contiene le calendrier oficiel de l'aplication, j'ai crier un email pour l'aplication et par consequence son calandrier -->
				<iframe src="https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23996633&amp;src=offoffice.info%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FLuxembourg" style="border:solid 1px #777" width="700" height="400" frameborder="0" scrolling="no"></iframe>
			</div>
						
	    						
    		</section>
		</div>
	</section>		
		
		 
<?php $this->stop('main_content') ?>