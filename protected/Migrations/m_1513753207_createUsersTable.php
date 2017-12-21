<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513753207_createUsersTable
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            CREATE TABLE users(
              id SERIAL PRIMARY KEY,
              name VARCHAR(255),
              role INT
            );
        ');
    }

    public function down()
    {
        $this->db->execute('
            DROP TABLE users;
        ');
    }
    
}