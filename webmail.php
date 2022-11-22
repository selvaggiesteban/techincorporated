<?php
	$name = $_POST["name"];
	$agency = $_POST["agency"];
	$mailFrom = $_POST["email"];
	$tel = $_POST["tel"];
	$artist = $_POST["artist"];
	$date = $_POST["date"];
	$international = $_POST["international"];
	$zone = $_POST["zone"];
	$currency = $_POST["currency"];
	$subject = "Web request through form";
	$to = "management@techincorporated.com.ar";
	$text = $_POST["message"];
	$headers = "From: " . $to;
	$message = "Name: " . $name . "\n\n" 
			. "Agency: " . $agency . "\n\n" 
				. "Email: " . $mailFrom . "\n\n" 
				.  "Phone number: " . $tel . "\n\n" 
				. "Artist: " . $artist . "\n\n" 
				. "Date: " . $date . "\n\n" 
				. "International: " . $international . "\n\n" 
				. "Zone: " . $zone . "\n\n"
				. "Currency: " . $currency . "\n\n" 
				. "Links: " . $text . "\n\n";

				mail($to, $subject, $message);

 if(mail($to, $subject, $message)){
	header("Refresh:0; url=index.html");
		$alert = "Tu mensaje ha sido enviado exitosamente!";
		echo "<script type='text/javascript'>alert('$alert');</script>";;
}else{ 
	echo 'El envio de tu email falló. Por favor intentalo nuevamente.'; 
 }
?>