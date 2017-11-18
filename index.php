<?php
    include("dbh.php"); 

// sql to create table
    $sql = "CREATE TABLE Programers (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50)
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table Programers created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>