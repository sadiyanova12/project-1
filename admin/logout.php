<?php

session_start();
session_destroy();

$_SESSION['Email'] = '';
$_SESSION['Flag'] = '';

 header('Location: ../index.php');


?>