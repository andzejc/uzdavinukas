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
require_once '../controllers/calculating.php';
$userType = $_SESSION['logged_user']->type;
$userName = $_SESSION['logged_user']->login;
if (!isset($userType)) {
	header('Location: ../index.php');
}
?>
<div class="hiBox">
<span><h3>Sekmės sprendžiant <?php echo $userName; ?> :) </h3>
</span>
</div>
	<span>
	<a href="../view/menu.php"><button> Grįžti atgal</button></a>
	<a href="../controllers/logout.php"><button> Išeiti</button> </a>
	</span>
	<div class="reg_box">

		<div class="kiss"></div>	
