<?php
  declare(strict_types = 1);

  session_start();

  if (!isset($_SESSION['id'])) die(header('Location: /'));

  require_once('database/connection.php');
  require_once('database/user.class.php');

  require_once('templates/common.php');
  require_once('templates/users.php');


  $db = getDatabaseConnection();

  $user = User::getUser($db, $_SESSION['id']);

  drawHeader();
  drawProfileForm($user);
  drawFooter();
?>