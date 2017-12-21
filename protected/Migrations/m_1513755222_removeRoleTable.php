<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513755222_removeRoleTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('

            CREATE TABLE `role_new` LIKE `role`;
            INSERT INTO `role_new` SELECT * FROM `role`;

            RENAME TABLE `role` TO `removed_role`

           -- DROP TABLE role; 
        ');
    }

    public function down()
    {
        $this->db->execute('


           DROP TABLE role_new;
           RENAME TABLE `removed_role` TO `role`
           
          
        ');

    }
    
}