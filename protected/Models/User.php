<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 25.12.2017
 * Time: 11:02
 */

namespace App\Models;


use T4\Orm\Model;

class User extends Model
{
    static protected $schema = [
        'columns' => [
            'name'   => ['type' => 'string'],
            'patranomic'   => ['type' => 'string'],
            'last_name'   => ['type' => 'string'],
            'email'   => ['type' => 'string'],
            'description'   => ['type' => 'string'],
        ]
    ];

    public function getUserName()
    {


    }


   static  public function getAllUser()
    {

        echo "090909";
//        $tem = self::afterFind();
//        var_dump($tem);


    }




}