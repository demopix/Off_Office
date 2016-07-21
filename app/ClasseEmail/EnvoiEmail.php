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
		$this->Username = 'harpezo371@gmail.com';                 // SMTP username
		$this->Password = 'vifargent371';//file_get_contents('../j36-git-upload/mdp.txt');                           // SMTP password
		$this->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$this->Port = 587;                                    // TCP port to connect to

		$this->setFrom('harpezo371@gmail.com', 'Anne-Marie');

	}//fin constructeur


	public function sendEmail($to, $subject,$body='',$attachments=array()){
	    	echo 'message envoyé';
	    	//email du destinataire

		$this->addAddress('annemarie_yim@yahoo.fr','Anne-Marie');     // Add a recipient
		$this->addAddress($to);               // Name is optional
		//$this->addReplyTo('mondher.labidi.lu');
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

