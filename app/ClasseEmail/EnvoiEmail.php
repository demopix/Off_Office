<?php
namespace ClasseEmail;

class EnvoiEmail extends \PHPMailer{
	//$this = new PHPMailer;

	//$this->SMTPDebug = 3;                               // Enable verbose debug output
	
	//je définis un constructeur
	function __construct(){

		$this->isSMTP();                                      // Set mailer to use SMTP
		$this->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$this->SMTPAuth = true;                               // Enable SMTP authentication
		$this->Username = 'offoffice.info@gmail.com';                 // SMTP username
		$this->Password = 'Wf3:AFGD';//file_get_contents('../j36-git-upload/mdp.txt');                           // SMTP password
		$this->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$this->Port = 587;                                    // TCP port to connect to

		$this->setFrom('offoffice.info@gmail.com', 'Off Office');

	}//fin constructeur


	public function sendEmail($to, $subject,$body='',$employer,$attachments=array()){
	    	echo 'message envoyé';
	    	//email du destinataire

		$this->addAddress('info@demopix.lu','Administrateur Sys');     // Add a recipient
		$this->addAddress($to);               // Name is optional
		$this->addReplyTo($employer);
		//$this->addCC('cc@example.com');
		//$this->addBCC('bcc@example.com');


		// J'ajoute les pièces jointes, s'il y en a
			if (is_array($attachments) && sizeof($attachments) > 0) {
				foreach ($attachments as $value) {
					$this->addAttachment($value);
				}
			}
		$this->isHTML(true); // Set email format to HTML

		$this->Subject = $subject;
		$this->Body    = $body;
		$this->AltBody = strip_tags($body);

		return $this->send();
		

		
	}//fin fonction EnvoiEmail

}//fin class

