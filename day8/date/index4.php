<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Dùng hàm mktime() để tạo ra thời gian dạng Unix timestamp
    Cú pháp : mktime(hour,minute,second,month,day,year)
</pre>
<?php
$d= mktime(11, 14, 54, 8, 12, 2014);
echo "Thời gian được tạo ra " . date("Y-m-d h:i:sa", $d);
?>
</body>
</html>