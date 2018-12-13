<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Uzdavinukas</title>
	<link rel="stylesheet" href="../style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
<?php
require_once '../db.php';
require_once '../controllers/redirect.php';
$sessionCheck = new Redirect();
$sessionCheck->redirectnonLoggedUsers();
require '../controllers/singUpAdmin.php';
?>
	<div class="hiBox"><h3> Registracija</h3></div>
	<div class="reg_box reg_box2">

		<div class="kids"></div>
		<form action="singUpAdminBox.php" method="POST">
			<p><strong>Vartotojo tipas: </strong></p>
				<input class="input" id="userType" type="text" name="userType" value="<?php echo @$data['userType']; ?>">
			<p>
				<p><strong>Vartotojo vardas: </strong></p>
				<input class="input" type="text" name="login" value="<?php echo @$data['login']; ?>">
			</p>
			<p>
				<p><strong>El. paštas: </strong></p>
				<input class="input" type="email" name="email" value="<?php echo @$data['email']; ?>">
			</p>
			<p>
				<p><strong>Slaptažodis: </strong></p>
				<input class="input" type="password" name="password">
			</p>
			<p>
				<p><strong>Pakartokite slaptažodį: </strong></p>
				<input class="input" type="password" name="password2">
			</p>
			<p>
				<button class="but1" type="submit" name="do_signup_admin">Užsiregistruoti</button>
			</p>
		</form>
		<div class="flex">
			<p>arba</p>
			<a href="adminPage.php"><button>Grįžti atgal</button></a>
		</div>

	</div>

</body>

</html>