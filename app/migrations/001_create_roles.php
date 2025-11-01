<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_roles extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => FALSE,
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ],

            // audit fields
            'created_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],
            'updated_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],
            'deleted_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],

            'created_at datetime default current_timestamp',
            'updated_at datetime null',
            'deleted_at datetime null',
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('roles');
        $this->db->query("ALTER TABLE `roles` ENGINE=InnoDB");

        // SEED DEFAULT ROLES
        $this->db->insert('roles', [ 'name' => 'admin', 'description' => 'Administrator' ]);
        $this->db->insert('roles', [ 'name' => 'user', 'description' => 'Normal User' ]);
    }

    public function down()
    {
        $this->dbforge->drop_table('roles');
    }
}
