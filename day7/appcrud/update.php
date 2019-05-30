<?php

include_once "config.php";

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['salary'])) {

    if ($_POST['name'] && $_POST['address'] && ($_POST['salary'] > 0)) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];

        $sqlInsert = "UPDATE employees SET name='$name',address='$address',salary=$salary WHERE id = " . (int) $_POST['id'];

        if (mysqli_query($connection, $sqlInsert)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Update thất bại";
        }

    }

}


echo "<pre>";
print_r($_POST);
echo "</pre>";

