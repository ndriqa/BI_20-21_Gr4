<?php
include('contactForm_db.php');
$msg="";
if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	
	$mysql="insert into contact_us(name,lname,email,phone,message) values('$name','$lname','$email','$phone','$message')";
	$msg="Thanks message";
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$lname</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$message</td></tr></table>";
	
	include('PHPMailer/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
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
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
    
    $alert = '';

    if($mail->send()){
        $alert = '<div class="alert-success">
                     <span>Message Sent! Thank you for contacting us.</span>
                    </div>';}
                    else {
                        $alert = '<div class="alert-error">
                     <span>Message Failed to sent! Thank you for contacting us.</span>
                    </div>';
                    }
	
	echo $msg;}

?>
