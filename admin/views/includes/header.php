<?php 
require 'head.php';

$email = $_SESSION['email'];

/*$getemail = intval($email);*/
$requser = $pdo->prepare('SELECT * FROM admin WHERE email = ?');
$requser->execute(array($email));
$userinfo = $requser->fetch();


$genre = $userinfo['genre'];
//  var_dump($genre);
//  die();
?>