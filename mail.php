<?php
    ini_set( 'display_errors', 1 );
	require('phpmailer.php');
	
	$this->isSMTP();
	$this->SMTPAuth=true;
	$this->SMTPSecure='ssl';
	$this->Host='smtp.gmail.com';
	$this->port =465;
	$this->isHTML();
	$to = 'sara35-1581@diu.edu.bd';
    $Name = $_POST["name"];
    $Email= $_POST["email"];
    $Subject= $_POST["subject"];
	$Message =$_POST["message"];
    
    


    
    

    mail($to,$Subject,$Message,$Email);
?>
