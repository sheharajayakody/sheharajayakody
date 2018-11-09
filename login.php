html>
<head>
<title>Login</title>
</head>
<body>
<h1>Login</h1>
    <form method="post" action="#">
    	<input type="text" name="txt_user" placeholder="Username" required /></br>
        <input type="password" name="txt_pwd" placeholder="Password" required />
        </br>
        <hr />
        <button type="submit">Login</button>
    </form> 
</body>
</html>
<?php
session_start();
if(isset($_POST["txt_pwd"]))
{
	$hash_user='$2y$10$Aox2TLo90Dv8etbrxgG/c.SK5hjIK7IP07EBtWvWaJpSY5mpPI6u.';
	$hash_password = '$2y$10$cDhd8hvSg1iEwsPpKq9WFOKmE5aRnJy6t1rHNzuoYWdySrkANnw0K';

	if (password_verify($_POST["txt_pwd"], $hash_password)&& password_verify($_POST["txt_user"],$hash_user)) {
    	echo 'Password is valid!';
		$_SESSION['Last_Time']=time();
		header("Location:Home.php");
		exit();
	} else {
		echo '<script language="javascript">';
		echo' alert("Invalid UserName Or Password")';
		echo '</script>';
	
	}
}




?>