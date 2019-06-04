<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Truyền tham chiếu và truyền tham trị cho function</h1>

<pre>
    - truyền tham trị là chỉ truyền giá trị
    - truyền tham chiếu hiểu 1 cách đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ
    khi 1 biến thay đổi thì biến còn lại cũng thay đổi
    - truyền tham chiếu trước tên biến sẽ có 1 dấy &
    function truyenthamchieu(&$d) {
        $d = $d * 2;
    }
</pre>

<?php
// truyen tham tri
$a = 5;
function truyenthamtri($b) {
    /**
     * biến b tính toán trong hàm
     * không liên quan đến cái biến được truyền trong hàm
     */
    $b = $b * 2;
    echo '<br> $b trong hàm là : ' . $b;
}
truyenthamtri($a);
echo '<br> $a là : ' . $a;
// truyen tham chieu
$c = 10;
function truyenthamchieu(&$d) {
    $d = $d * 3;
    echo '<br> $d trong hàm là : ' . $d;
}
/**
 * hiểu $c và $d sẽ tham chiếu đến cùng 1 ô nhớ
 * khi mà biến $d bị thay đổi thì biến $c cũng bị thay đổi theo
 * và người lại
 */
truyenthamchieu($c);
echo '<br>$c là : ' . $c;
?>

</body>
</html>