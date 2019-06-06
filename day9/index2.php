<?php
class Connguoi {

    public $name;

    public function getInfo() {
        echo "<br>" . __METHOD__;
    }

}

/**
 * Chỉ có thể kế thừa từ 1 class
 * Class Nhanvien
 */
class Nhanvien extends Connguoi {

}

/**
 * Đa kế thừa dùng trait
 */