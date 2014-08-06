<?php
// Include the template!
include_once("inc/template.php");
include_once("inc/connection.php");



if(!empty($_POST)) {

	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$adress = isset($_POST['adress']) ? $_POST['adress'] : '';
	$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

	foreach($_POST as $value) { 
		if(stripos($value, 'Content-Type:') !== FALSE) { 
			echo "Ett fel uppstod, försök igen."; 
			exit; 
		}
			
	}

	if($name == '' || $email == '' || $msg == '') {
		$form = formHTML($name, $email, $msg);
		$content = <<<END
		
			<p>Please fill in all the fields.</p>
			{$form}
		
END;

	}

	
	else {
 
		$to			= "kimpan24@gmail.com";
		$subject	= "From website. From: " . $name;
		$headers 	= "MIME-Version: 1.0" . "\r\n";
		$headers 	.= "Content-type:text/html;charset=utf-8" . "\r\n";
		$headers 	.= "From: {$email}" . "\r\n";
		$headers 	.= "Reply-To: {$email}";
	
	if(mail($to, $subject, $msg, $headers)) {
		$content = <<<END
	
			<p>Your message has been sent!</p>
			<p><a href="contact.php">Go back to Contact</a></p>
	
END;
 
	} else {
 
		$content = <<<END
	
			<p>Sorry, something went wrong!</p>
			<p><a href="contact.php">Go back to Contact</a></p>
	
END;
 
		}
	}
 
}


	else {
 
		$form = formHTML();
			$content = <<<END

				{$form}

END;

	}

	if(!empty($adress)) {
		die("Stupid robot, go home!");
	}

echo $header;
echo $content;
echo $footer;

function formHTML($name = "", $email = "", $msg = "") {
	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$msg = htmlspecialchars($msg);

	return <<<END
	
<form method="post" id="myform" action="contact.php">
	<fieldset>
		<legend>Contact</legend>
		<label for="name">Name:</label> <input type="text" name="name" id="name" value="{$name}" /> <br />
		<label for="email">E-mail:</label> <input type="text" name="email" id="email" value="{$email}" />
		<input type="text" id="adress" name="adress" /><br />
		<label for="msg">Message:</label> <textarea name="msg" id="msg">{$msg}</textarea> <br />
		<input class="btn btn-info" type="submit" name="send" id="send" value="Send" />
	</fieldset>
</form>
	
END;

	}
?>