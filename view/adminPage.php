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

$users = R::findAll('users');
?>

	<div class="hiBox">
	<h3> Admin page</h3>
	<span>
<h3>Labas <?php echo ($_SESSION['logged_user']->login); ?></h3>
</span>
<div><a href="../controllers/logout.php">Išeiti</a></div>
	</div>
	
	<br>
	<div class="reg_box">
	<table>
  <tr>
    <th>Login</th>
    <th>Email</th>
		<th>Reg. date</th>
		<th>Type</th>
		<td><a href="singUpAdminBox.php">add</a></td>
	</tr>
	<?php foreach ($users as $i) { ?>
  <tr>
    <td><?php echo $i->login ?></td>
    <td><?php echo $i->email ?></td>
		<td><?php echo gmdate("Y-m-d", $i->reg_date) ?></td>
		<td><?php echo $i->type ?></td>
		<td>	<a href="editUser.php?userId=<?php echo $i->id ?>" >edit</a></td>
		<td>	<a href="../controllers/delete.php?userId=<?php echo $i->id ?>" >delete</a></td>
	</tr>
	<?php 
} ?>
</table>
	</div>
</body>
</html>