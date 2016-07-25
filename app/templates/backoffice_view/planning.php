<?php $this->layout('layout', ['title' => 'Planning | Oo !']) ?>

<?php $this->start('main_content') ?>
	<h2>add new entry in planning and see the iframe google calendar </h2>
	<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>	
	</br>	
	<div class="body-innerwrapper"> 
       	<section id="sp-main-body">
    		<div class="container">
    			<div class="row">
    				<div id="sp-component" class="col-sm-12 col-md-12">
    					<div class="sp-column ">
    					<div id="system-message-container">	</div>
    					<div>
        					<form method="post" id="userForm" action="<?=$this->url("planning_task_add");?>">
	        					<div id="insertevent">
	        						<p>
	        							Event Title: (*) <span><input type="text" name="summary" placeholder="title du event"></span>
	        						</p>
	        						<p>
	        							Event localisation: (*) <span><input type="text" name="local" placeholder="local du event"></span>
	        						</p>
	        						<p>
	        							Event description: <span><input type="text" name="description" placeholder="description du event"></span>
	        						</p>
	        						<p>
	        							Date et heure du debut: 
	    								<span>
	    									<input type="datetime-local" name="dateStart">
	    										        						
	    								</span>  
	        						</p>
	        						<p>
	        							Date et heure du fin: 
	    								<span>
	    									<input type="datetime-local" name="end">
	    									
	    								</span>  
	        						</p>
	        						<p>
	        							email des perticipants: 
	        							<span>
	        								<input type="text" name="atendees" placeholder="email des invitees">
	        							</span>
	        						</p>
	        						<p>
	        							<input type="submit" value="Add Event!" class="rsform-submit-button" />
	        						</p>
	        					</div>     
							</form>	
							<div id='calendar' >
        						<iframe src="https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23996633&amp;src=offoffice.info%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FLuxembourg" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        					</div>
    						</div> 
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
	</div> 
<?php $this->stop('main_content') ?>