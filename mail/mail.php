<pre><?php 
	$name = $_POST["name"];
	$email = $_POST["email"];
	$size = $_POST["size"];
	$email_body ="";
	$email_body ="Name: " . $name . "\n" . "Email: " . $email . "\n" . "Size: " . $size;
	echo $email_body;
 ?></pre>