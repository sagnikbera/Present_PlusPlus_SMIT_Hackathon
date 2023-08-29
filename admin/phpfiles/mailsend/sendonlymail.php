
<?php
	include('phpmailer/PHPMailerAutoload.php');

	// function sendOTP($toEmail, $otp)

	// include('pdf.php');
	// $file_name =  'a.pdf';
	// $html_code = ;
	// $html_code .= ;
	// $pdf = new Pdf();
	// $pdf->load_html($html_code);
	// $pdf->load_html($html_code);

	// $pdf->render();
	// $file = $pdf->output();
	// file_put_contents($file_name, $file);
	
	// {
		$status =$_POST['status'];


        if($status==1){

        
		$toEmail =$_POST['email'];
		$action =$_POST['action'];
		$userid =$_POST['userid'];
		$name =$_POST['name'];
		$date =$_POST['date'];
		$cause =$_POST['cause'];
		$lid =$_POST['lid'];
		$mail = new PHPMailer;
		$mail->isSMTP();  //Only enable when use in local server 

		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';

		$mail->Username = 'sayandip31072003@gmail.com';
		$mail->Password = 'ovcvjfosjxcyenyh';

		$mail->setFrom('sayandip31072003@gmail.com', 'Online journey Service');
		$mail->addAddress($toEmail);
		$mail->addReplyTo('sayandip31072003@gmail.com');
		// $mail->addAttachment($file_name); 
		// $mail->addAttachment("RANKCARD.pdf");     				//Adds an attachment from a path on the filesystem

		$mail->isHTML(true);

		$mail->Subject = 'From SMIT Service(Regarding Leave Request).....';
        if($action==1){

            $mail->Body = 'Congratulations, '.$name.' ! Your Leave Request Of Date-'.$date.' is Approved.......';
        }
        else{
            $mail->Body = 'Oh! Your Leave Request Of Date-'.$date.' is Rejected.......';
            
        }

		if(!$mail->send())
		{
			echo "not sent";
		}
		else{
			echo "sent";
		}
        include("../config.php");
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $p=$grpname;
        $sql = "UPDATE leavereq SET status=1 WHERE  lid=$lid ";
        $result = $conn->query($sql);
       
    }
	// }
?>
