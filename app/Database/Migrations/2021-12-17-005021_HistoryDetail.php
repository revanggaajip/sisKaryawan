<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HistoryDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'BIGINT',
                'constraint'    => 20,
                'unsigned'      => true,
                'auto_increment'=> true
            ],
            'nama'=> [
                'type'          =>'VARCHAR',
                'constraint'    => 100
            ],
            'hasil_akhir' => [
                'type'          => 'DOUBLE'
            ],
            'ranking' => [
                'type'          => 'INT'
            ],
            'header_id' => [
                'type'          => 'BIGINT',
                'constraint'    => 20,
                'unsigned'      => true,               
            ],
            'created_at'    => [
                'type'          => 'DATETIME',
                'null'          => TRUE
            ],
            'updated_at'    => [
                'type'          => 'DATETIME',
                'null'          => TRUE
            ]
        ]);
        $this->forge->addKey('id');
        $this->forge->addForeignKey('header_id', 'historyheader', 'id');
        $this->forge->createTable('historydetail');
    }

    public function down()
    {
        $this->forge->dropTable('historydetail');
    }
}
