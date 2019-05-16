<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_GET) && !empty($_GET)) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>

<h1>Form HTML</h1>
<pre>
   $_GET gửi dữ liệu đi qua URL
    ví dụ mặc định http://localhost/1901ephp1/day3/1.senddata/get.php
    khi form có method="get" gửi dữ liệu đi :
    http://localhost/1901ephp1/day3/1.senddata/get.php?username=aaa&password=111&submit=%C4%90%C4%83ng+k%C3%BD
    lúc này php sẽ đưa các tên của ô input trong form và giá trị của chúng
    lên trên query string của URL
</pre>

<div>
    <form name="register" action="" method="get">

        <div>
            <label>Username</label>
            <input type="text" name="username" value="" placeholder="nhập username">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" value="" placeholder="nhập pasword">
        </div>

        <div>
            <input type="submit" name="submit" value="Đăng ký">
        </div>

    </form>
</div>
</body>
</html>