<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1514189324_fillPeopleTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('
           
            INSERT INTO `users`(`name`, `patranomic`, `last_name`, `email`) VALUES 
            ("Alex","Sergeevich","Cher","test@test.ru"),
            ("Petr","","Petrunin","test2@test.ru"),
            ("Vasiliy","","","test3@test.ru"),
            ("","","","test4@test.ru");
        ');
    }

    public function down()
    {
        $this->db->execute('
            DELETE FROM `users`;
        ');
    }
    
}