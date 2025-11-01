<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_user_tokens extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],

            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'null' => FALSE,
            ],

            'token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],

            'refresh_token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ],

            'expires_at datetime null',

            // audit
            'created_at datetime default current_timestamp',
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_tokens');
        $this->db->query("ALTER TABLE user_tokens ENGINE=InnoDB");

        // FK
        $this->db->query("
            ALTER TABLE user_tokens
            ADD CONSTRAINT fk_tokens_users
            FOREIGN KEY (user_id) REFERENCES users(id)
            ON DELETE CASCADE
        ");
    }

    public function down()
    {
        $this->dbforge->drop_table('user_tokens');
    }
}
