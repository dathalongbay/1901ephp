<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các phương thức xử lý chuỗi trong php</h1>

    <?php
    $str = "chao ha noi";

    // hàm dùng để đếm số ký tự
    echo "<br> Hàm strlen(biến) dùng để đếm số ký tự : " . strlen($str);
    echo "<br> Hàm str_word_count (biến) dùng để đếm số từ trong chuỗi : " . str_word_count($str);
    echo "<br> Hàm strrev(biến) dùng để đảo ngược chuỗi : " . strrev($str);
    ?>
</body>
</html>