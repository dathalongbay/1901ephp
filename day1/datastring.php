<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// nháy kép bao nháy đơn
$html = "<div class='container'>Thẻ div</div>";
// nháy đơn bao nháy kép
$html = '<div class="container">Thẻ div</div>';
// sử dụng ký tự escape ngoại lệ \" in ra "
$html = "<div class=\"container\">Thẻ div</div>";
// nháy bên ngoài là nháy bao chuỗi . nháy bên trong là nháy để in ra và phải có \ ở phía trước
$html = '<div class=\'container\'>Thẻ div</div>';
echo $html;
?>
</body>
</html>