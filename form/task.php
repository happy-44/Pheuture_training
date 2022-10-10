<?php
   // print_r($_POST);
   echo "<br>";
   if(isset($_POST["register"])){
      $name = (isset($_POST["username"])) ? $_POST["username"] : "value is not found! please enter your name";
      $age = (isset($_POST["user_age"])) ? $_POST["user_age"] : "value is not found! please enter your age";
      $email = (isset($_POST["user_email"])) ? $_POST["user_email"] : "value is not found! please enter your email";
      $password = (isset($_POST["user_pass"])) ? $_POST["user_pass"] : "value is not found! please enter your password";
      $gender = (isset($_POST["radio"])) ? $_POST["radio"] : "value is not found! please enter your gender";
      $country = (isset($_POST["country"])) ? $_POST["country"] : "value is not found! please enter your country";
      // echo "<br>Name :- " .$name. "<br>Age :- " .$age. "<br>Email  :- " .$email. "<br>Password :- " .$password. "<br>Gender :- " .$gender. "<br>Country :- " .$country;
      

      $target_dir = "uploads/";
      $main_file_name = $_FILES["filename"]["name"];
      $main_file_name_size = $_FILES["filename"]["size"];
      $target_file = $target_dir . basename($main_file_name);
      $ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      

      $temp_file_name = $_FILES["filename"]["tmp_name"];
      $target_temp_file = $target_dir . basename($temp_file_name);
      
      $finalpath = $target_dir.$main_file_name;
      if(file_exists($finalpath)){
         $file1_name = $name.date("ymd").$ext;
         $finalpath = $target_dir.$file1_name;
      }
      if(move_uploaded_file($temp_file_name,$finalpath)){
         echo "file successfully uploaded";
      }else{
         echo "unable to upload file";
      }
   }else{
      echo "form is not submitting your response!!! please check!";
      header("refresh:3;url=index.html");
   }
   include_once("./table.php");
?>



<?php
    session_start();
    $_SESSION["username"] = "$name";
    $_SESSION["age"] = "$age";
    $_SESSION["email"] = "$email";
    $_SESSION["password"] = "$password";
    $_SESSION["gender"] = "$gender";
    $_SESSION["country"] = "$country";

   //  header("refresh:3;url=display.php");
?>