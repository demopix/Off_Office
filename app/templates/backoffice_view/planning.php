<?php $this->layout('layout', ['title' => 'Planning | Oo !']) ?>

<?php $this->start('main_content') ?>
	<h2>add new entry in planning and see the iframe google calendar </h2>

	<a class="btn btn-danger" href="<?=$this->url("backoffice_main",['e'=>'List']);?>"> < Back Office</a>
<?php
	// Refer to the PHP quickstart on how to setup the environment:
include '../quickstart.php';
// https://developers.google.com/google-apps/calendar/quickstart/php
// Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
// credentials.

if (!isset($_POST)) {
	echo 'remplisser bien tous les champs';
} 
else if ((isset($_POST["dateStart"]))&&(isset($_POST["end"]))) {
	$start = $_POST["dateStart"].':00Z';
	//print_r($start);
	$end = $_POST["end"].':00Z';
	//print_r($end);

//print_r($start);
	$event = new Google_Service_Calendar_Event(array(
   'summary' => $_POST["summary"],
   'location' => $_POST["local"],
   'description' => $_POST["description"],
   'start' => array(
   	'dateTime' => $start,
    'timeZone' => 'Europe/Luxembourg',
   ),
   'end' => array(
     'dateTime' => $end,
     'timeZone' => 'Europe/Luxembourg',
   ),
   'recurrence' => array(
     'RRULE:FREQ=DAILY;COUNT=2'
   ),
   'attendees' => array(
     array('email' => $_POST["atendees"]),   
   ),
   'reminders' => array(
     'useDefault' => FALSE, //mudei para TRUE era FALSE
     'overrides' => array(
       array('method' => 'email', 'minutes' => 24 * 60),
       array('method' => 'popup', 'minutes' => 10),
     ),
   ),
 ));
	//print_r($_POST);
	//print_r($event);
	
	}
	$calendarId = 'offOffice.info@gmail.com';
 	$event = $service->events->insert($calendarId, $event);
	printf('Event created: %s\n', $event->htmlLink);


?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>calendar</title>
	</head>
	<body>
		<div class="body-innerwrapper"> 
        	<section id="sp-main-body">
        		<div class="container">
        			<div class="row">
        				<div id="sp-component" class="col-sm-12 col-md-12">
        					<div class="sp-column ">
        					<div id="system-message-container">	</div>
        					<div>
	        					<form method="post">
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
	        									<input type="submit" name=""></input>	        									
	        								</span>  
	        						</p>
	        						<p>
	        							Date et heure du fin: 
	        								<span>
	        									<input type="datetime-local" name="end">
	        									<input type="submit" name=""></input>	        									
	        								</span>  
	        						</p>
	        						<p>
	        							email des perticipants: <span><input type="text" name="atendees" placeholder="email des invitees"></span>
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
							
									
	
        
	</body>
</html>
<?php $this->stop('main_content') ?>