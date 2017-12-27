<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 27.12.2017
 * Time: 10:39
 */

namespace App\tests\Contollers\User;


use App\Controllers\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public  function testGetFullName()
    {
        $item1 = [
            [
                "name" => "Alex",
                "last_name" => "Cher",
                "patranomic" => "Sergeevich",
            ]
        ];

        $this->assertSame('AlexSergeevichCher<br>',User::getFullName($item1));

        $item1 = [
            [
                "name" => "Alex",
                "last_name" => "Cher",
            ]
        ];
        $this->assertSame('AlexCher<br>',User::getFullName($item1));

        $item1 = [
            [
                "name" => "Alex",
                "email" => "test4@test.ru",
            ]
        ];
        $this->assertSame('test4@test.ru<br>',User::getFullName($item1));
        $item1 = [
        ];
        $this->assertSame('',User::getFullName($item1));

    }

}