
<style>
.errors{
	padding: 10px;
	font-weight: 700;
	color: red;
	text-shadow: 2px 2px black;
	font-size: 55px;
	font-family: cursive;
	font-weight: bold;
}
.ok{
	padding: 10px;
	font-weight: 700;
	color: green;
	text-shadow: 2px 2px black;
	font-size: 55px;
	font-family: cursive;
	font-weight: bold;
}
</style>
<?php
require_once 'db.php';
$data = $_POST;
if (isset($data['do_login'])) {
	$errors = array();
	$user = R::findOne('users', 'login = ? ', array($data['login']));
	if ($user) {
// 		//slaptazodis egzistuoja
		if (password_verify($data['password'], $user->password)) {
// 			//viskas gerai logina useri
			$userType = $user->type;
			$_SESSION['logged_user'] = $user;
			if ($userType == 'admin') {
				// header('Location: ../suskaiciuok/view/adminPage.php');
			} else {
				// header('Location: ../suskaiciuok/view/menu.php');
			}
		} else {
			$errors[] = 'Blogas slaptažodis!';
		}
	} else {
		$errors[] = 'Vartotojas neegzistuoja!';
	}
	if (!empty($errors)) {
		echo '<div class="errors">' . array_shift($errors) . '</div><br>';
	}
}
?>
