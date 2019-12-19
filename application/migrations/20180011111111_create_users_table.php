<?php

class Migration_Create_users_table extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role_id' => ['type' => 'INT', 'constraint' => 11],
            'username' => ['type' => 'VARCHAR', 'constraint' => 255],
            'password' => ['type' => 'TEXT'],
            ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}