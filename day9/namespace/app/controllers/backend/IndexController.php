<?php
namespace App\Controllers\Backend;

/**
 * cú pháp as để tạo bí danh
 * Khi import namespace thì phải import đến tận cấp tên class
 */
use App\Controllers\Frontend\IndexController as FIC;
use App\Models\CommonModel;
use Duc\Console\Http;

class IndexController {


    public function indexAction() {
        echo "<br>" . __METHOD__;

        $this->useOtherNamespace();
    }

    public function useOtherNamespace() {

        $controlerFe = new FIC();

        $controlerFe->indexAction();

        $model = new CommonModel();
        $model->indexAction();

        $test = new Http();
        $test->indexAction();
    }
}