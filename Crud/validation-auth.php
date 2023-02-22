<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('location: ../Login/login.php');
  die();
}

