<?php
    if(isset($_POST)){
        include 'conn.php';
        $task = $_GET['task'];
        mysqli_query($base, "INSERT INTO `list`(`tasks`) VALUES ('$task');");
        echo "Inserted value: ".$task." ";
    }
   