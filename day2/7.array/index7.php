<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Các hàm xử lý mảng</h1>
<?php
    $students = array("tuan", "hung", "nam", "linh", "chi");
    echo "<br> Trước khi sắp xếp";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    echo "<br>Đếm số phần tử trong mảng : " . count($students);
    asort($students);
    echo "<br> Sau khi sắp xếp asort() sắp xếp mảng chỉ số theo thứ tự tăng dần theo AZ dựa vao giá trị của các phần tử";
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    rsort($students);
    echo "<br> Sau khi sắp xếp rsort() sắp xếp mảng chỉ số theo thứ tự giảm dần theo ZA dựa vào giá trị của các phần tử";
    echo "<pre>";
    print_r($students);
    echo "</pre>";
?>
</body>
</html>