<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Mvc\Controller;

class Index
    extends Controller
{

    public function actionDefault()
    {

        $tt = include ROOT_PATH_PROTECTED . '/config.php';

        $this->data->domain = $tt["domain_name"];

        $this->data->foo = 'bar';
    }


}