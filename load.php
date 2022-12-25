<?php
    include "conn.php";
    $question = mysqli_query($base, "SELECT tasks FROM list;");
    $i = 0;
    while($answer = mysqli_fetch_assoc($question)){
        echo "<div class='task'>";
        echo $answer['tasks'];
        echo "<input type='checkbox' class='boxes' id='task$i'></div>";
        $i++;
    }
?>