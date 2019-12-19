<?php

class Migration_Create_roles_table extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field([
            'id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 255],
            ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('roles');
    }

    public function down()
    {
        $this->dbforge->drop_table('roles');
    }
}