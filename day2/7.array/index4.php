<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Foreach mảng kết hợp ( có key chắc chắn chứa chữ ) </h1>

<?php
// Mảng kết hợp
$students = array("a" => "nguyen van a1","b" => "nguyen van a2","c" => "nguyen van a3",
    "d" => "nguyen van a4","e" => "nguyen van a5",);
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<br> Dạng foreach đầy đủ";
// Dạng foreach đầy đủ
if (is_array($students) && !empty($students)) {
    foreach($students as $key => $value) {
        echo "<br> Key : " . $key . " Value : " . $value;
    }
}
echo "<br> Dạng foreach rút gọn";
// Dạng foreach rút gọn chỉ lặp và xuất ra cái value
if (is_array($students) && !empty($students)) {
    foreach($students as  $value) {
        echo "<br> Value : " . $value;
    }
}
?>
</body>
</html>