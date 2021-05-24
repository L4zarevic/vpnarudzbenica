<?php session_start();unset($_SESSION["logged_in_user"]);die(header('Location:login.php'));
