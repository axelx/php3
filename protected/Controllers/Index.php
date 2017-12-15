<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Core\Std;
use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {

        $this->data->domain = $this->app->config->domain_name;


    }


}