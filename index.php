<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Uzdavinukas</title>
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
<?php
require_once 'controllers/login.php';
require_once 'controllers/redirect.php';
$sessionCheck = new Redirect();
$sessionCheck->redirectIndexPage();
?>

	<div class="hiBox"><h1> Uždavinukas</h1></div>
	<div class="reg_box">

		<div class="kids"></div>
		<form action="index.php" method="POST">
			<p>
				<p><strong>Vardas: </strong></p>
				<input class="input" type="text" name="login" value="<?php echo @$data['login']; ?>">
			</p>
			<p>
				<p><strong>Slaptažodis: </strong></p>
				<input class="input" type="password" name="password"  minlength=4>
			</p>
			<p>
				<button class="but1" type="submit" name="do_login">Pradėti</button>
			</p>
		</form>
		<div class="flex">
			<p>arba</p>
			<a href="view/singupBox.php"><button>Užsiregistruoti</button></a>
		</div>

	</div>
</body>

</html>