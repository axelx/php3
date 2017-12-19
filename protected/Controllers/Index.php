<?php

namespace App\Controllers;

use T4\Core\Config;
use T4\Core\Std;
use T4\Fs\Helpers;
use T4\Http\Uploader;
use T4\Mvc\Controller;

class Index
    extends Controller
{



    public function actionDefault()
    {

        $this->data->domain = $this->app->config->domain_name;
        $this->data->build = $this->app->config->build;

        $this->data->images = Helpers::listDir(ROOT_PATH_PUBLIC . '/storage');
//        var_dump($this->data->images); die();


    }

    public function actionUpload()
    {
        $uploader = new Uploader('image');
        #Сделать любое другое место, чтобы в сборку не попадало, а потом сделать симлинк на эту папку.
//        $uploader->setPath('/storage/');
//        $uploader->setPath('c:\OpenServer\src-temp\php3.site\_img\\');
        $uploader->setPath('/../../../src-temp/php3.site/_img/');
        $uploader();
        $this->redirect('/');
    }


}