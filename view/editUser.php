

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
require '../db.php';
require_once '../controllers/redirect.php';
$sessionCheck = new Redirect();
$sessionCheck->redirectnonLoggedUsers();
$userId = htmlspecialchars($_GET['userId']); 
$userEdit = R::load('users', $userId );

?>
	<h1> Atnaujinimas</h1>
	<div class="reg_box reg_box2">

		<div class="kids"></div>
		<form action="adminPage.php" method="POST">
			<p><strong>Vartotojo tipas: </strong></p>
				<input class="input" id="userType" type="text" name="userType" value="<?php echo $userEdit->type ?>">
			<p>
				<p><strong>Vartotojo vardas: </strong></p>
				<input class="input" type="text" name="login" value="<?php echo $userEdit->login ?>">
			</p>
			<p>
				<p><strong>El. paštas: </strong></p>
				<input class="input" type="email" name="email" value="<?php echo $userEdit->email ?>">
			</p>
			<p>
				<button class="but1" type="submit" name="do_update">Issaugoti</button>
			</p>
		</form>
		<div class="flex">
			<p>arba</p>
			<a href="adminPage.php">Grįžti atgal</a>
		</div>

	</div>

</body>

</html>