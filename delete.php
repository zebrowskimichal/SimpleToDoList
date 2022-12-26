<?php
    if(isset($_POST)){
        include 'conn.php';
        $id = $_GET['id'];
        mysqli_query($base, "DELETE FROM `list` WHERE id=".$id." ");
        echo "Deleted entry with id: ".$id." ";
    }
   