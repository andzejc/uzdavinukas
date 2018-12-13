
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../style/style.css">
	<title>Meniu</title>
	<?php
	require_once '../db.php';
	require_once '../controllers/redirect.php';
	$sessionCheck = new Redirect();
	$sessionCheck->redirectToIndex();
	?>
</head>
<body>
<span class="hiBox">
<h3>Labas <?php echo ($_SESSION['logged_user']->login); ?>, pasirink užduotį  </h3>
</span>


	<div class="menu_box">
	<a href="../tasks/task1.php" class="box" style="background-color: #b000b5; box-shadow: 3px 3px black;"><div><h2>1 ...</h2></div></a>
	<a href="../tasks/task2.php" class="box" style="background-color: #bada55; box-shadow: 3px 3px black;"><div><h2>2 > 1</h2></div></a>
	<a href="../tasks/task3.php" class="box" style="background-color: #eb01a5; box-shadow: 3px 3px black;"><div><h2>1 + 2</h2></div></a>
	<a href="../tasks/task4.php" class="box" style="background-color: #fb1; box-shadow: 3px 3px black;"><div><h2>2 - 1</h2></div></a>
	<a href="../tasks/task5.php" class="box" style="background-color: #fa5732; box-shadow: 3px 3px black;"><div><h2>2 + 2 + 2</h2></div></a>
	<a href="../tasks/task6.php" class="box" style="background-color: #60d; box-shadow: 3px 3px black;"><div><h2>2 - 1 - 1</h2></div></a>
	<a href="../tasks/task7.php" class="box" style="background-color: #4cc355; box-shadow: 3px 3px black;">	<div><h2>(x + y) - z</h2></div></a>
	<a href="../tasks/task8.php" class="box" style="background-color: #e7011e; box-shadow: 3px 3px black;">	<div><h2>(x-y)+(z+j)</h2></div></a>
	<a href="../tasks/task9.php" class="box" style="background-color: #2ec19e; box-shadow: 3px 3px black;">	<div><h2>x * y</h2></div></a>
	<a href="../tasks/task10.php" class="box" style="background-color: #17a11a; box-shadow: 3px 3px black;">	<div><h2>x / y</h2></div></a>
	</div>
	<a href="../controllers/logout.php"><button>Išeiti</button></a>

</body>
</html>