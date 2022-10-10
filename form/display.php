<?php
    
    session_start();
      $name = (isset($_SESSION["username"])) ? $_SESSION["username"] : "value is not found! please enter your name";
      $age = (isset($_SESSION["age"])) ? $_SESSION["age"] : "value is not found! please enter your age";
      $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : "value is not found! please enter your email";
      $password = (isset($_SESSION["password"])) ? $_SESSION["password"] : "value is not found! please enter your password";
      $gender = (isset($_SESSION["gender"])) ? $_SESSION["gender"] : "value is not found! please enter your gender";
      $country = (isset($_SESSION["country"])) ? $_SESSION["country"] : "value is not found! please enter your country";
    //   echo "<br>Name :- " .$name. "<br>Age :- " .$age. "<br>Email  :- " .$email. "<br>Password :- " .$password. "<br>Gender :- " .$gender. "<br>Country :- " .$country;
    echo "<br>";
    include_once("./table.php");
    
    session_destroy();

?>