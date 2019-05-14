<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng trong php có 3 kiểu chính :
    1 . mảng chỉ số ( là mảng có key là các số nguyên )
    2 . mảng kết hợp ( là mảng có key là số và chữ . hoặc là mảng có key là chữ )
    3 . mảng đa chiều ( mảng chứa mảng )
</pre>

<?php
$mang_chi_so = array("nguyen a", "nguyen b", "nguyen c");

echo "<pre>";
print_r($mang_chi_so);
echo "</pre>";
$mang_chi_so_1 = array(0 => "nguyen a", 1 => "nguyen b", 2 => "nguyen c");
echo "<pre>";
print_r($mang_chi_so_1);
echo "</pre>";

$mang_ket_hop = array("hanoi" => 8000000, "hochiminh" => 12000000, "danang" => 2000000);

echo "<pre>";
print_r($mang_ket_hop);
echo "</pre>";
?>
</body>
</html>