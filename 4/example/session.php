<?php

session_start();

$_SESSION['test']="Good_Idea";

// echo $_SESSION['test'];
var_dump($_SESSION['test']);

session_unset();
var_dump($_SESSION['test']);
?>