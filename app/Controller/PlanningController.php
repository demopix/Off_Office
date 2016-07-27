<?php

namespace Controller;

use \W\Controller\Controller;

class PlanningController extends Controller
{

     /**
     * Page Planning rule ->  employe || admin
     */
    public function planning()
    {
        echo 'insert google calender in this method';

        //traiter le formulaire et le exibition du planning ici...
        //
        $this->show('backoffice_view/planning');
    }
    



   /**
     * utiliser l'api google calender ajouter new task rule ->  employe || admin
     */

    public function task_add()
    {
      include("../quickstart.php");
        
        //enoyer par email 1 ou plus destinataires ...
        // Refer to the PHP quickstart on how to setup the environment:
        //include '../quickstart.php';
        // https://developers.google.com/google-apps/calendar/quickstart/php
        // Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
        // credentials.
        if (!isset($_POST)) {
            echo 'remplisser bien tous les champs';

           

        $this->show('backoffice_view/planning');
        } 
        else if ((isset($_POST["dateStart"]))&&(isset($_POST["end"]))) {
          
        $start = $_POST["dateStart"].':00Z';
        //print_r($start);
        $end = $_POST["end"].':00Z';
        echo 'in ev';
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
     )); echo 'form inserted task';  
        $calendarId = 'offOffice.info@gmail.com';
        $event = $service->events->insert($calendarId, $event);
        printf('Event created: %s\n', $event->htmlLink);
        
        $this->url("planning_task_add");
        
    }

  
        
 }
     /**
     * Page Employer delete client = 'status inatif' rule ->  employe || admin
     */
    public function task_delete()
    {
        echo 'delete';
        //traiter suppression de tache par le employer author ou admin  ici...
        //$this->show('open_view/planningv');
    }

}