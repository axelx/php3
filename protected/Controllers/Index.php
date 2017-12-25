<?php

namespace App\Controllers;

use App\Models\User;
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
        echo "<pre>";
        $tmpImg = [];

        foreach ($this->data->images as $item) {
//            var_dump(basename($item));
            $fileName = basename($item);
            if ("." == $fileName || ".." == $fileName){
                continue;
            }else{
                $item = $fileName;
            }
            $tmpImg[] = $item;
        }
        $this->data->allImgFromStorage = $tmpImg;

//===================================

        $data = User::findAll();
        $dd = User::getAllUser();
        var_dump($dd);

//        $this->data->name = $data[0]->name;
//        $this->data->patronymic = $data[0]->patronymic;
//        $this->data->last_name = $data[0]->last_name    ;



    }

    public function actionUpload()
    {
        $uploader = new Uploader('image');
//        $uploader->setPath('/../../../src-temp/php3.site/_img/');
        $uploader->setPath('/../../../storage/');

        $uploader();
        $this->redirect('/');
    }


}