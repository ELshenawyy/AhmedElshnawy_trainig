<?php

    $host = 'localhost';
    $username = "root";
    $password = "";
    $dbName = "mans";

    $conn = mysqli_connect($host , $username , $password , $dbName);

    if(!$conn) {
        die('Connection Failed !');
    }
/*
$table = "CREATE TABLE teachers(

    id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    
    name VARCHAR(40) NOT NULL ,
    
    salary FLOAT(40) NOT NULL ,
    
    add_date TIMESTAMP DEFAULT
    
    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    )";
    
    if(mysqli_query($conn, $table)) { 
        echo "Table Created Successfuly!";
    
    }else{
    
    echo "Something Wrong!";
    }


    $sql = "INSERT INTO students(name, address, grade, gender) 
    VALUES('Omar' , 'Mansoura', 98 ,'male')";

mysqli_query($conn,$sql);

*/
?>



