<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],

            'role_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,     // ✅ MUST MATCH roles.id
                'null' => FALSE,
            ],

            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => FALSE,
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE,
            ],

            'first_name' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => TRUE],
            'last_name'  => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => TRUE],
            'email'      => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => TRUE],
            'phone'      => ['type' => 'VARCHAR', 'constraint' => '20', 'null' => TRUE],

            'status' => ['type' => 'INT', 'constraint' => 1, 'default' => 1],

            // audit
            'created_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],
            'updated_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],
            'deleted_by' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'null' => TRUE],

            'created_at datetime default current_timestamp',
            'updated_at datetime null',
            'deleted_at datetime null',
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
        $this->db->query("ALTER TABLE `users` ENGINE=InnoDB");

        // FOREIGN KEY
        $this->db->query("
            ALTER TABLE users 
            ADD CONSTRAINT fk_users_roles
            FOREIGN KEY (role_id) REFERENCES roles(id)
            ON DELETE RESTRICT ON UPDATE CASCADE
        ");

        // SEED ADMIN USER
        $this->db->insert('users', [
            'role_id' => 1, // admin
            'username' => 'admin',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'admin@site.com',
            'status' => 1
        ]);
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
