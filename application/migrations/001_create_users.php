<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Migration_create_users extends CI_Migration {
public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'f_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '35',
            ),
            'l_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '35',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),            
            'phone' => array(
                'type' => 'VARCHAR',
                'constraint' => '15',
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => '6',
            ),
            'answer' => array(
                'type' => 'VARCHAR',
                'constraint' => '30',
            ),
        ));
        $this->dbforge->add_key('id');
        $this->dbforge->create_table('tbl_employee');
    }
    public function down() {
        $this->dbforge->drop_table('tbl_employee');
    }
}