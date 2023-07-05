
<?php
    header ("Content-Type: application/json");
    $string = file_get_contents ("./database/dischi.json"); // json in stringa
    echo $string;
?>