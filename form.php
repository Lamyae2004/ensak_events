<?php
session_start();
include('connexion.php');
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login=$_POST['login'];
    $password=$_POST['password'];
    $query="SELECT * FROM organisateurs WHERE login='$login'";
    $resultat=mysqli_query($conn,$query);
    if (mysqli_num_rows($resultat)>0)
    {
        $user=mysqli_fetch_assoc($resultat);
        if($password==$user['password'])
        {
            $_SESSION['loggedin']=true;
            $_SESSION['login']=$user['login'];
            $_SESSION['nom']=$user['nom'];
            $_SESSION['prenom']=$user['prenom'];
            $_SESSION['id_organisateur']=$user['id_organisateur'];
            header("Location:Annonce.php");
            exit;
        }else{
            header("Location:login_error.php");
        }
    } else {
        header("Location:login_error.php");
    }
    mysqli_close($conn);
} ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="form.css">
	<title></title>
</head>
<body>
	<div class="box">
		<span class="borderLine"></span>
		<form method="post" action="#">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="email" name="login" required="required">
				<span>Login</span>
				<i></i>
			</div>
        <div class="inputBox">
				<input type="password" name="password" required="required">
				<span>Password</span>
				<i></i>
			</div>
		<input type="submit" value="Login">

     </form>
	</div>

</body>
</html>