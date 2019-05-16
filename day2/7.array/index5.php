<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>mảng đa chiều chính là mảng lồng mảng</h1>

<h1>Mảng 2 chiều</h1>
<?php

$class9a = array(
        "name_class" => "9A",
        "students" => array("an", "hương", "sơn", "linh")
);
$class9b = array(
        "name_class" => "9B",
        "students" => array("an1", "hương1", "sơn1", "linh1")
);


$dinhtienhoang = array($class9a,$class9b);

echo "<pre>";
print_r($dinhtienhoang);
echo "</pre>";

if(is_array($dinhtienhoang) && !empty($dinhtienhoang)) {
    foreach($dinhtienhoang as $key_class => $class) {
        echo "<br> -". $class["name_class"];
        if(is_array($class["students"]) && !empty($class["students"])) {
            foreach($class["students"] as $key_student => $student) {
                echo "<br> -- " . $student;
            }
        }
    }
}

?>
</body>
</html>