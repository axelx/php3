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
        $items = ModUser::findAll();
//            echo "<pre>";
//        var_dump($items);

        foreach ($items as $item) {

            if ( ($item->name ?? false ) && ($item->patranomic ?? false ) && ($item->last_name ?? false ) ){

                echo $item->name . $item->patranomic  . $item->last_name ;

            } elseif ( ($item->name ?? false ) && ($item->last_name ?? false ) ){

                echo $item->name   . $item->last_name ;

            }else {

                echo $item->email;

            }

            echo "<br>";

        }


        $this->data->items = ModUser::getAllUser();


    }

}

/*
function testUnitTest ($user){
//    echo $user->last_name ?? "sfdsdf" ;
    if ( ($user->name ?? false ) && ($user->patranomic ?? false ) && ($user->last_name ?? false ) ){


        return $user->name . $user->patranomic  . $user->last_name ;

    } elseif ( ($user->name ?? false ) && ($user->last_name ?? false ) ){


        return $user->name   . $user->last_name ;

    }else {


        return $user->email;

    }

    return "<br>Пока ничего<br>";

}*/