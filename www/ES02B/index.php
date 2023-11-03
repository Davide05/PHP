<!DOCTYPE html>
<html>
<head>
  <title>Richiesta credenziali per l'accesso all'area riservata</title>
</head>
<body>

<?php
session_start();

if (isset($_SESSION['user'])) {
    echo "<p style='color: green;'>Benvenuto, {$_SESSION['user']}</p>";
    echo "<a href='{$_SERVER['PHP_SELF']}?logout=true'>Logout</a>";
} else {
    $error_message = !empty($error) ? "<p style='color: red;'>$error</p>" : "";
    echo "
    <form method='POST' action='{$_SERVER['PHP_SELF']}'>
        $error_message
        <label for='username'>Username:</label>
        <input type='text' name='username' id='username' required><br><br>

        <label for='password'>Password:</label>
        <input type='password' name='password' id='password' required><br><br>

        <input type='submit' name='INVIO' value='Login'>
    </form>";
}
?>

</body>
</html>


<html>
<head>
	<title>Richiesta credenziali per l'accesso all'area riservata</title>
</head>
<body>
	<?php
	if(isset($_POST["username"]) && isset($_POST["password"])) 
	{
		$user=$_POST["username"];
		$password=$_POST["password"];
	
		if($user!="admin"||$password!="password")
		{
			echo"<h4>nome utente o password sbagliate</h4>";
		}
		else
		{
			echo"<h4>benvenuto</h4>";
		}
	}
	else
	{
		echo<<<END
			<form name="frmlogin" method="post" action="{$_SERVER['PHP_SELF']}">
			Username:<input type="text" name="username"><br>
			Password:<input type="password" name="password"><br>
			<input type="submit" name="submit">
			</form>
		END;
	}
	?>
</body>
</html>
