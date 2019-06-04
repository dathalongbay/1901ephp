<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Kiểu số trong php

</pre>
<?php
$a = 20;
$b = 10;
echo "<br>Tổng : " . ($a + $b);
echo "<br>Hiệu : " . ($a - $b);
echo "<br>Tích : " . ($a * $b);
echo "<br>Thương : " . ($a / $b);
echo "<br>Chia lấy dư : " . ($a % $b);
echo '<br>var_dump(); được sử dụng để debug xem kiểu dữ liệu và giá trị của biến<br>';
var_dump($a);
echo '<br>';
var_dump($b);
?>
</body>
</html>