
<?php
$result = exec("python trail_knn.py C:\xampp\htdocs\trail\trail_knn.py");
$result_array = json_decode($result);

function array_flatten($array = null) {
    $result = array();

    if (!is_array($array)) {
        $array = func_get_args();
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        } else {
            $result = array_merge($result, array($key => $value));
        }
    }

    return $result;
}
$arr = array_flatten($result_array);
$neb = [];
foreach($arr as $key => $value){
    $neb [$key] = $value;
}
$var1 = $neb[3];
$var2 = $neb[7];
$var3 = $neb[11];
print $var1;
print $var2;
print $var3;
?>
