<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513754107_addRoleAndAddNewUsers
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            INSERT INTO `role`( `description`) VALUES ("administrator"),("developer");
            INSERT INTO `users`( `name`,`role`) VALUES ("Aleksey",2),("Vladimir",1);
        ');
    }

    public function down()
    {
        $this->db->execute('
            DELETE FROM `role`;
            DELETE FROM `users`;
        ');
    }
    
}