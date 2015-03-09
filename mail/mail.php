<pre><?php 
	$name = $_POST["name"];
	$adress = $_POST["adress"];
	$phone = $_POST["phone"];
	$size = $_POST["size"];
	$email_body = "";
	$email_body ="Name: " . $name . "\n" . "Email: " . $adress . "\n" . "Size: " . $size;
	echo $email_body;
	// send mail

 ?></pre>