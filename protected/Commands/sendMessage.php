<?php
/**
 * Created by PhpStorm.
 * User: HP11
 * Date: 27.12.2017
 * Time: 12:39
 */

namespace App\Commands;


use T4\Console\Command;

class sendMessage extends Command
{
    public function actionDefault()
    {

        $name = $this->read('What is your name?');
        $this->writeLn('Hello ' . $name . '!');
    }

}