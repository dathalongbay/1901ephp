<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

Mảng chứa danh sách các dữ liệu khác nhau chứa được nhiều giá trị
Các kiểu dữ liệu như số , chuỗi chỉ chứa được duy nhất 1 giá trị
để khai mảng $mang = array("nguyen van a", "nguyen van b", "nguyen van c");
Câu trúc của mảng :
gồm 2 phần chính : key và value
key được hiểu như chỉ số
value được hiểu như 1 giá trị
Mình sẽ có 1 cái tủ đựng đồ . Mỗi ô tủ có 1 mã số thì cái key trong mảng chính là mã số đó
còn cái chứa trong tủ thì sẽ là giá trị value
Key trong mảng tuần tự thì bắt đầu từ 0
<?php
$mang = array("nguyen van a", "nguyen van b", "nguyen van c");
// Lấy giá trị của mảng ra thông qua việc truy cập vào key của mảng
echo "<br>" . $mang[0];
echo "<br>" . $mang[1];
echo "<br>" . $mang[2];
?>


</body>
</html>