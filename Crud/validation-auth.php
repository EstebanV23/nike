<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('Location: ../Login/login.php');
  die();
}

