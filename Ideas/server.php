<!DOCTYPE html>
<html lang="en">
<head>
  <title>Idea Submission details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><br><br>
  <style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;
}
th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
  <center><h1> Idea Submission Results..</h1></center>
</head>
<body>
<div class="container">
<div class="col-sm-3">
   </div>
   <div class="col-sm-6 ">
<?php
    include('data.php'); 
    $table=0;
if (isset($_POST['submit'])) 
{
		// receive all input values from the form
		$name= mysqli_real_escape_string($db, $_POST['name']);
		$roll= mysqli_real_escape_string($db, $_POST['roll']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$mobile= mysqli_real_escape_string($db, $_POST['mobile']);
		$year= mysqli_real_escape_string($db, $_POST['year']);
		$title= mysqli_real_escape_string($db, $_POST['title']);
		$description= mysqli_real_escape_string($db, $_POST['description']);
		$email=strtolower($email);
		$query="INSERT INTO ideas (`name`, `roll`, `email`, `mobile`, `year`, `title`, `description`) VALUES ('$name','$roll','$email','$mobile','$year','$title','$description')";
		if(mysqli_query($db, $query))
		{

		     echo "<div class='alert alert-success'><strong>Success!</strong> successfully Submitted..!.</div>";
             echo "<h3>Details:</h3>";
             $table="<table>
			  
			  <tr>
			    <td>Name</td>
			    <td>: <strong>".$name."</strong></td>
			  </tr>
			  <tr>
			    <td>Title </td>
			    <td>: <strong>".$title."</strong></td>
			  </tr>
			  <tr>
			    <td>Roll No</td>
			    <td>: <strong>".$roll."</strong></td>
			  </tr>
			  <tr>
			    <td>Email</td>
			    <td>: <strong>".$email."</strong></td>
			  </tr>
			  <tr>
			    <td>Mobile</td>
			    <td>:<strong> ".$mobile."</strong></td>
			  </tr>
			  <tr>
			    <td>Year</td>
			    <td>: <strong>".$year."</strong></td>
			  </tr>
			</table>";
             echo $table;

          echo "<br><strong>Description:</strong><br><p>".$description."</p>";
			 $table=$table."<br><strong>Description:</strong><br><p>".$description."</p>";
		}
		 else
		 	echo "<div class='alert alert-danger'>
   <strong>Sorry !</strong> Problem encountered..!.
  </div>";
		sendmail($name,$email,$table);
		//header('location:index.php');
		
	}

function sendmail($name, $email,$table)
 {
    
    date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require './PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.zoho.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "email@acumenece.info"; // Your email address.
$mail->Password = "password"; // Your email login password or App Specific Password.
/*
 * Message Configuration
 */
$s=$name.",Thank you Your Response is Submitted."; 
$mail->setFrom('admin@acumenece.info', 'ACUMEN ECE'); // Set the sender of the message.
$mail->addAddress($email, $name); // Set the recipient of the message.
$mail->Subject =$s; // The subject of the message.
$mail->IsHTML(true);
$mail->Subject = 'Your Response Submitted'; // The subject of the message. 
//$mail->IsHTML(true);
/*
 * Message Content - Choose simple text or HTML email
 */
$msg='<h4> Dear '.$name.'</h4><br>'.'Greetings from ACUMEN ECE <br>Thank you for Submitting idea for ACUMEN ECE 2K19<br> Your Response';
$msg=$msg."<br> ".$table;

// Choose to send either a simple text email...
$mail->Body = $msg; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
//$mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {
    echo "Your message was sent successfully!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
sleep(5);
}
}
?>