<?php

namespace App\Commands;


use T4\Console\Command;

class Hello extends Command
{
    public function actionDefault()
    {
//        echo "Hello";
//       $name = $this->read('What is your name?');
//       $this->writeLn('Hello ' . $name . '!');


/*        echo memory_get_usage(true);
        echo "\n";

        $arr = range(0,1000000);
        echo memory_get_usage(true);

        echo "\n";*/


//        xdebug_debug_zval('x');

        $x = 55;
        echo $x . PHP_EOL;

        $y = &$x;

        $x = 20;

        echo $y.PHP_EOL;

        $y = 31;

        echo $x . PHP_EOL;



    }

}