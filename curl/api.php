<?php 

    // echo "Happy Mittal<br>";

    $file = array("name"=>"Happy", "age"=>"21", "Email"=>"happymittal129@gmail.com","password"=>"12345","Gender"=>"male","Country"=>"india");
    $body = json_encode($file);
    echo $body;
?>