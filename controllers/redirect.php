<?php
// require_once '../db.php';
class Redirect
{

	function redirectIndexPage()
	{
		if (isset($_SESSION['logged_user'])) {
			$userType = $_SESSION['logged_user']->type;
			if ($userType == "admin") {
				header('Location: ../view/adminPage.php');
			} else {
				header('Location: ../view/menu.php');
			}
		}

	}
	function redirectnonLoggedUsers()
	{
		if (!isset($_SESSION['logged_user'])) {
			header('Location: ../index.php');
		}

		if (isset($_SESSION['logged_user'])) {
			$userType = $_SESSION['logged_user']->type;
			if ($userType == "user") {
				header('Location: ../view/menu.php');
			}
		}

	}
	function redirectToIndex()
	{
		if (!isset($_SESSION['logged_user'])) {
			header('Location: ../index.php');
		}

	}

}


?>