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
require '../controllers/singup.php';
require_once '../controllers/redirect.php';
$sessionCheck = new Redirect();
$sessionCheck->redirectIndexPage();
?>
	<div class="hiBox"><h3> Registracija</h3></div>

	<div class="reg_box reg_box2">

		<div class="kids"></div>
		<form action="singupBox.php" method="POST">
				<!-- <input class="input" type="hidden" name="userType" value="<?php $userType ?>"> -->
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
				<input class="input" type="password" name="password"  minlength=4>
			</p>
			<p>
				<p><strong>Pakartokite slaptažodį: </strong></p>
				<input class="input" type="password" name="password2" minlength=4>
			</p>
			<p>
				<button class="but1" type="submit" name="do_signup">Užsiregistruoti</button>
			</p>
		</form>
		<div class="flex">
			<p>arba</p>
			<a href="../index.php"><button>Grįžti atgal prie autorizacijos</button></a>
		</div>

	</div>

</body>

</html>