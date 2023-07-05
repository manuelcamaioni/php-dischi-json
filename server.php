
<?php
    header ("Content_Type: application/json");
    $string = file_get_contents ("./database/dischi.json"); // json in stringa
    $arrayRecords = json_decode ($string); // string to array
    var_dump($arrayRecords);
?>