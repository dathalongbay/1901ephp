<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    // khởi tạo thời gian
    $month = date('m');

    switch ($month) {
        case 1:
            echo "mùa xuân";
            break;
        case 2:
            echo "mùa xuân";
            break;
        case 3:
            echo "mùa xuân";
            break;

        case 4:
            echo "mùa he";
            break;
        case 5:
            echo "mùa he";
            break;
        case 6:
            echo "mùa he";
            break;

        case 7:
            echo "mùa thu";
            break;
        case 8:
            echo "mùa thu";
            break;
        case 9:
            echo "mùa thu";
            break;

        case 10:
            echo "mùa đông";
            break;
        case 11:
            echo "mùa đông";
            break;
        case 12:
            echo "mùa đông";
            break;
        default:
            echo "Không xác định";
    }

?>
</body>
</html>