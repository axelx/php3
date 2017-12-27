<?php

namespace App\Commands;


use T4\Console\Command;

class Hello extends Command
{
    public function actionDefault()
    {
//        echo "Hello";
       $name = $this->read('What is your name?');
       $this->writeLn('Hello ' . $name . '!');

    }

}