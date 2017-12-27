<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 25.12.2017
 * Time: 12:47
 */

namespace App\Controllers;


use T4\Mvc\Controller;
use App\Models\User as ModUser;


class User extends Controller
{
    public function actionDefault()
    {
//        echo " teett";

        $items = ModUser::findAll();

        echo $this->getFullName($items);
//            echo "<pre>";
//        var_dump($items);

//        foreach ($items as $item) {
//
//            if ( ($item->name ?? false ) && ($item->patranomic ?? false ) && ($item->last_name ?? false ) ){
//
//                echo $item->name . $item->patranomic  . $item->last_name ;
//
//            } elseif ( ($item->name ?? false ) && ($item->last_name ?? false ) ){
//
//                echo $item->name   . $item->last_name ;
//
//            }else {
//
//                echo $item->email;
//
//            }
//
//            echo "<br>";
//
//        }


//        $this->data->items = ModUser::getAllUser();


    }

    public static function getFullName($items){

        $res = '';
//        echo "<pre>";
//        var_dump($items);
        if (empty($items)){
            var_dump("990909");
            return "";
        }


        foreach ($items as $item) {

//            var_dump($item);

            if ( ($item['name']?? false ) && ($item['patranomic'] ?? false ) && ($item['last_name'] ?? false ) ){

                $res .= $item['name'] . $item['patranomic']  . $item['last_name'] ;

            } elseif ( ($item['name'] ?? false ) && ($item['last_name'] ?? false ) ){

                $res .= $item['name']   . $item['last_name'] ;

            }else {

                $res .= $item['email'];

            }

            $res .= "<br>";

        }

        return $res;

    }

}
