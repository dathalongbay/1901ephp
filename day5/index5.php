<?php



class Test {

    /**
     * Những thuộc tính được khai báo giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * @var int
     */
    public $a = 5;

    protected $b = 7;

    private $c = 8;


}

class Test1 extends  Test {

    public function truycapthuoctinhpubliccha() {
        echo "<br>" . __METHOD__ . " " . $this->a;
    }

    public function truycapthuoctinhprotectedcha() {

        // chỉ Có thể truy cập vào thuộc tính hoặc phương thức có giới hạn là protected
        // từ các class kế thừa của class cha
        // không thể truy cập từ bên ngoài class cha hoặc class kế thừa từ class cha
        echo "<br>" . __METHOD__ . " " . $this->b;
    }


    public function truycapthuoctinhprivatecha() {
        echo "<br>" . __METHOD__ . " " . $this->c;
    }
}


$t1 = new Test1();

$t1->truycapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();
$t1->truycapthuoctinhprivatecha();