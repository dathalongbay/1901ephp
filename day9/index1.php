<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Lambda là hàm không có tên</h1>

    <?php
    function hello($name) {
        echo "<br> Hello " . $name;
    }

    hello("function");

    /*
     * Có những hàm chỉ cần sử dụng duy nhất 1 lần
     * Khi mình khai báo và gán 1 cái lambda cho 1 biến thì cần kết thúc lambda bằng dấu ;
     */
    $hello = function($name){
        return "<br> Hello " . $name;
    };

    /**
     * Gọi lambda qua biến
     *
     * $bien("truyền vào tham số nếu có")
     */
    echo $hello("lambda");

    /**
     * Callback
     * khi mà thực hiện xong 1 hành động mới cho phép 1 hành động khác chạy ngay đó
     * thì người ta gọi cái hành động chạy phía sau là callback
     * @param $country
     * Tham số truyền vào hàm này bắt buộc phải là 1 lambda đóng vai trò là callback của hàm showMessage()
     * tức là showMessage() chạy trước sau đó gọi lambda callback phía sau
     */
    function showMessage($country) {
        /*
         * Khi biến chắc chắn tham số truyền vào hàm là lambda thì gọi
         * tham số $thamso()
         */
        echo "<br> Xin chào " . $country();
    }


    /**
     * function (){
    return "Korea";
    }
     * đóng vài trò là giá trị truyền vào và nó là 1 lambda
     */
    showMessage(function (){
        return "lambda truyền ở dạng callback";
    });


    ?>
</body>
</html>