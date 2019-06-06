<?php
namespace App\Controllers\Backend;

use App\Controllers\Frontend;
use App\Models;

class IndexController {


    public function indexAction() {
        echo "<br>" . __METHOD__;

        $this->useOtherNamespace();
    }

    public function useOtherNamespace() {

        $controlerFe = new Frontend\IndexController();

        $controlerFe->indexAction();

        $model = new Models\CommonModel();
        $model->indexAction();

    }
}