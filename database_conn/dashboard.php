<?php
   $db = new mysqli("localhost","root","","Task") or die("error in db connection");
?>
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

</body>
</html>