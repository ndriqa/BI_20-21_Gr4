<?php
include('contactForm_db.php');
include ('PHPMailer\PHPMailer');
include ('PHPMailer\Exception');

$msg="";
if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	//$mysql="insert into contact_us(name,lname,email,phone,message) values('$name','$lname','$email','$phone','$message')";
	$msg="Thanks message";
  

	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Last Name</td><td>$lname</td></tr><tr><td>E-mail Address</td><td>$email</td></tr><tr><td>Phone Number</td><td>$mobile</td></tr><tr><td>Message</td><td>$message</td></tr></table>";
	
	include('PHPMailer/PHPMailerAutoload.php');
  
	$mail=new PHPMailer(true);

  try{
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="biznesi.interneti@gmail.com";
	$mail->Password="biznesi1";
	$mail->SetFrom("biznesi.interneti@gmail.com");
	$mail->addAddress("biznesi.interneti@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
  //$mail->addAttachment('xampp/htdocs/BI_20-21_Gr4/Images/Freshness.png');
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));

  $mail->send();
    echo 'Message sent!';
} catch (Exception $e) {
    echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (\Exception $e) { //The leading slash means the Global PHP Exception class will be caught
    echo $e->getMessage(); //Boring error messages from anything else!
}
}
    /*$alert = '';

    if($mail->send()){
        $alert = '<div class="alert-success">
                     <span>Message Sent! Thank you for contacting us.</span>
                    </div>';}
                    else {
                        $alert = '<div class="alert-error">
                     <span>Message Failed to sent! Thank you for contacting us.</span>
                    </div>';
                    }
	
	echo $msg;}*/



?>

<style>
/*.alert-success{
  z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;
}

.alert-error{
  z-index: 1;
  background: #FFF3CD;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #FFA502;
  border-radius: 4px;*/
  </style>
