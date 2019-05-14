<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 5/14/2019
 * Time: 7:50 PM
 */
for($i = 1; $i < 20; $i++) {

    if ($i == 10) {
        // continue bỏ qua các lệnh bên dưới continue trong lần lặp đó
        // và chuyển sang lần lặp tiếp theo
        continue;
    }

    echo "<br> $i";
}