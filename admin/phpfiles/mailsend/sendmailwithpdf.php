
<?php
	include('phpmailer/PHPMailerAutoload.php');

	// function sendOTP($toEmail, $otp)

	// include('pdf.php');
	// $file_name =  'a.pdf';
	// $html_code = '';
	// $html_code .= ;
	// $pdf = new Pdf();
	// $pdf->load_html($html_code);
	// $pdf->load_html($html_code);

	// $pdf->render();
	// $file = $pdf->output();
	// file_put_contents($file_name, $file);
	
	// {
		$toEmail ="sayandip126@gmail.com";
		// $con =$_POST['content'];
		// $otp=565671;
		// $path="Downloads";
		// $name="RANKCARD.pdf";
		$mail = new PHPMailer;
		$mail->isSMTP();  //Only enable when use in local server 

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'sayandip31072003@gmail.com';
		$mail->Password = 'ovcvjfosjxcyenyh';

		$mail->setFrom('sayandip31072003@gmail.com', 'SMIT Mail System');
		$mail->addAddress($toEmail);
		$mail->addReplyTo('akanup67@gmail.com');
		$mail->addAttachment("SMIT-ATTENDANCE-REPORT.pdf"); 
		// $mail->addAttachment("RANKCARD.pdf");     				//Adds an attachment from a path on the filesystem

		$mail->isHTML(true);
		$mail->Subject = 'SMIT-ATTENDANCE-REPORT';
		$mail->Body = 'Respected Sir, This is Your Attandance Report Card';

		if(!$mail->send())
		{
			echo "not sent";
		}
		else{
			echo "sent";
		}
	// }
?>
