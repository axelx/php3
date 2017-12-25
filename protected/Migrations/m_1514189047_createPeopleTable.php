<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1514189047_createPeopleTable
    extends Migration
{

    public function up()
    {
//        $this->db->execute('
//            CREATE TABLE users(
//              id SERIAL PRIMARY KEY,
//              name VARCHAR(50),
//              patronymic VARCHAR(50),
//              last_name VARCHAR(50),
//              email VARCHAR(50),
//              description VARCHAR(255)
//            );
//        ');
        $this->db->execute('
            ALTER TABLE `users` ADD `email` VARCHAR(50) NOT NULL AFTER `name`;
            ALTER TABLE `users` ADD `patranomic` VARCHAR(50) NOT NULL AFTER `name`;
            ALTER TABLE `users` ADD `last_name` VARCHAR(50) NOT NULL AFTER `name`;
        ');
    }

    public function down()
    {
        $this->db->execute('
            ALTER TABLE `users` DROP `email`;
            ALTER TABLE `users` DROP `patranomic`;
            ALTER TABLE `users` DROP `last_name`;
        ');
    }
    
}