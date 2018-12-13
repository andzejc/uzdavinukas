<?php
require_once '../db.php';
$userId = htmlspecialchars($_GET['userId']); 

$delete = R::load('users', $userId );

R::trash( $delete );
header('Location: ../view/adminPage.php')
?>
