<?php
$result = exec("python input_query.py C:\xampp\htdocs\trail\input_query.py");
$result_array = json_decode($result);

print($result_array);
?>