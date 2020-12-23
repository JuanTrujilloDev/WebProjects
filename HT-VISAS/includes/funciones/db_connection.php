<?php
    $conn = new mysqli('localhost' , 'root' , 'root' , 'HtVisas');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
    ?>