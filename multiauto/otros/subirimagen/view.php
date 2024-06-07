<?php

    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'multiauto';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3307);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }else{
        echo("hola");
    }
    
    //Get image data from database
    $result = $db->query("SELECT imagen FROM imagenes WHERE id = 1");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/png"); 
        echo $imgData['imagen']; 
    }else{
        echo 'Image not found...';
    }

?>