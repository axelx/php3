<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1513753993_createRoleTables
    extends Migration
{

    public function up()
    {
        $this->db->execute('
            CREATE TABLE role(
              id SERIAL PRIMARY KEY,
              description VARCHAR(255)
            );
        ');
    }

    public function down()
    {
        $this->db->execute('
            DROP TABLE role;
        ');
    }
    
}