<?php
   session_start();
   unset($_SESSION["login_user"]);
   echo 'You have successfully loggedout';
   header('Refresh: 2; URL = ../register/index.php');
?>