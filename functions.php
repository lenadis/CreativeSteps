<?php
	function sendEmail($subject, $message){
		$to='maarja.koobas@gmail.com';
		$headers='From:no_reply@creativesteps.com'."\r\n".
			'Reply-To:no_reply@creativesteps.com'."\r\n".
			'X-Mailer:PHP/'.phpversion();
		
		mail($to, $subject, $message, $headers);
	}
?>
