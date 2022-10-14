<?php
   echo "<br>";
   if(isset($_POST["register"])){
      $name = (isset($_POST["username"])) ? $_POST["username"] : "value is not found! please enter your name";
      $age = (isset($_POST["user_age"])) ? $_POST["user_age"] : "value is not found! please enter your age";
      $email = (isset($_POST["user_email"])) ? $_POST["user_email"] : "value is not found! please enter your email";
      $password = (isset($_POST["user_pass"])) ? $_POST["user_pass"] : "value is not found! please enter your password";
      $gender = (isset($_POST["radio"])) ? $_POST["radio"] : "value is not found! please enter your gender";
      $country = (isset($_POST["country"])) ? $_POST["country"] : "value is not found! please enter your country";
      // echo "<br>Name :- " .$name. "<br>Age :- " .$age. "<br>Email  :- " .$email. "<br>Password :- " .$password. "<br>Gender :- " .$gender. "<br>Country :- " .$country;
      
   }else{
      echo "form is not submitting your response!!! please check!";
      header("refresh:3;url=index.html");
   }

?>
<?php 
    $db = new mysqli("localhost","root","","Task") or die("error in db connection");
    $db -> query("insert into users(name, age, email, pass, gender, country) values('$name','$age','$email','$password','$gender','$country')");
?>
<!-- <?php
   $db = new mysqli("localhost","root","","Task") or die("error in db connection");
?> -->
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
   <body>
      <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <td>Name</td>
                <td>Age</td>
                <td>Email</td>
                <td>Password</td>
                <td>Gender</td>
                <td>Country</td>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
               $result = $db -> query("select * from users");
               if(mysqli_num_rows($result) > 0){
               while($rows = $result -> fetch_object()){
                  $id = $rows -> id;
                  $name = $rows -> name;
                  $age = $rows -> age;
                  $email = $rows -> email;
                  $password = $rows -> pass;
                  $gender = $rows -> gender;
                  $country = $rows -> country;
                  echo "<tr>
                        <td>$id</td>
                        <td>$name</td>
                        <td>$age</td>
                        <td>$email</td>
                        <td>$password</td>
                        <td>$gender</td>
                        <td>$country</td>
                  </tr>"; 
               }
               }else{
               echo "No result";
               }
            ?>
      </table>
   </body>
</html>
