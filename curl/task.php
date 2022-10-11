<?php 
    $curl = curl_init();
    
    //task-1
    curl_setopt($curl, CURLOPT_URL, "http://localhost/pheuture/curl/api.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    echo $response;
    
    echo "<br>";
    echo "<br>";

    //task-2
    curl_setopt($curl, CURLOPT_URL, "http://localhost/pheuture/curl/api.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    echo $response;
    
    echo "<br>";
    echo "<br>";

    //task-3
    $newarr = json_decode($response, true);
    print_r($newarr);

    echo "<br>";
    echo "<br>";
    
    //task-4
    curl_setopt($curl, CURLOPT_URL, "http://localhost/pheuture/curl/newapi.php");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $response);
    curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $result1 = curl_exec($curl);
    echo $result1;

    echo "<br>";
    echo "<br>";


    //task-5
    $curl1 = curl_init();
    //$file = array("name"=>"Happy", "age"=>"21", "Email"=>"happymittal129@gmail.com","password"=>"12345","Gender"=>"male","Country"=>"india");
    curl_setopt($curl1, CURLOPT_URL, "http://localhost/pheuture/curl/display.php");
    curl_setopt($curl1, CURLOPT_POST, 1);
    curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl1, CURLOPT_POSTFIELDS, http_build_query($_POST));
    $response = curl_exec($curl1);
    echo $response;
?>