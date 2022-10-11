<?php 

$name = (isset($_POST["username"])) ? $_POST["username"] : "value is not found! please enter your name";
$filename = (isset($_POST["filename"])) ? $_POST["filename"] : "file not found";
$filepath = (isset($_POST["filepath"])) ? $_POST["filepath"] : "file not found";
$age = (isset($_POST["user_age"])) ? $_POST["user_age"] : "value is not found! please enter your age";
$email = (isset($_POST["user_email"])) ? $_POST["user_email"] : "value is not found! please enter your email";
$password = (isset($_POST["user_pass"])) ? $_POST["user_pass"] : "value is not found! please enter your password";
$gender = (isset($_POST["radio"])) ? $_POST["radio"] : "value is not found! please enter your gender";
$country = (isset($_POST["country"])) ? $_POST["country"] : "value is not found! please enter your country";
include_once("../form/table.php");
?>