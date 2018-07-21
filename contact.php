
<?php
include('includes/array.php');
include('includes/header.php');
?>
<div class="commoncontainer">
<div id="contact">
</br>
<p style="font-size: 20px;">----Get in Touch with us----</p>
<?php
function has_header_injection($str){
	return preg_match("/[\r\n]/",$str);
}
if(isset($_POST['submit'])){
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$message=$_POST['message'];

if(has_header_injection($name) || has_header_injection($email)){
	die();
	
}
if(!$name || !$email  || !$message){
?>
	<h1>All field Required</h1>
	<h2><a href="contact.php" >Back To Contact</a></h2>
<?php
	exit();
}
$to="Minhazuddin3044@gmail.com";
$subject= "$name sent you message via contact form";


$msg="Name: $name\r\n";
$msg.="email: $email\r\n";
$msg.="Message: \r\n$message";

if(isset($_POST['subscribe']) && $_POST['subscribe']=='subscribe'){
	$msg.="\r\n\r\nPlease add $message to message list";
}

$msg = wordwrap($msg,72);
/*-----------------set the mail header in to a variable-----------------*/
$header="MINE-Version: 1.0\r\n";
$header.="Content-Type:text/plain:charset=ISO-8859-1\r\n";
$header.="From:$name<$email>/r/n";
$header.="X-Priority:1\r\n";
$header.="X-MSMail-priority:High\r\n\r\n";




/*------------------sent the mail--------------------*/

mail($to,$subject,$msg,$header);


}
?>


<form method="post"action="" id="contactForm" >

	<level for="name">Your Name</level></br>
	<input type="text" id="name" name="name" size='35'></br></br>
	<level for="email">Your Email</level></br>
	<input type="email" id="email" name="email" size='35'></br></br>
	<level for="message">Your Message</level></br>
	<textarea id="message" name="message"  style="width:250px; height:100px;"></textarea></br>
	<input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
	<level for="subscribe">subscribe to newsletter</level></br></br>
	<input type="submit" id="submit" name="submit" value="Send Message" >

</form>

</div>





</div>
<?php
include('includes/footer.php');
?>