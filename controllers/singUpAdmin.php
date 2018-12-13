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
require_once '../db.php';
$userType = "user";
$current_date = date("Y-m-d");
$my_date = strtotime($current_date);

// patikrinam ar kazkas paspaude miktuka Registration
$data = $_POST;
if (isset($data['do_signup_admin'])) {
	// cia atliekam registracija
		//patikrinam ar loginas nera tuscias
	$errors = array();
	if (trim($data['userType']) != 'admin' && trim($data['userType']) != 'user') {
		$errors[] = 'Įveskite Vartotojo tipą: admin arba user!';
	}
	if (trim($data['login']) == '') {
		$errors[] = 'Įveskite Vartotojo vardą!';
	}
	if (trim($data['email']) == '') {
		$errors[] = 'Įveskite el. paštą!';
	}
	if ($data['password'] == '') {
		$errors[] = 'Įveskite slaptažodį!';
	}
	if ($data['password2'] != $data['password']) {
		$errors[] = 'Slaptažodžiai nesutampa!';
	}
	if (R::count('users', "login = ?", array($data['login'])) > 0) {
		$errors[] = 'Toks vartotojo vardas egzistuoja!';
	}
	if (R::count('users', "email = ?", array($data['email'])) > 0) {
		$errors[] = 'Toks el. pašto adresas jau egzistuoja!';
	}

	if (empty($errors)) {
			// viskas gerai, registruojam
		$user = R::dispense('users');
		$user->type = $data['userType'];
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		$user->reg_date = $my_date;
		R::store($user);
		header('Location: ../view/adminPage.php');
	} else {
		echo '<div class="errors" style="color: red;">' . array_shift($errors) . '</div><hr>';
	}
}
?>