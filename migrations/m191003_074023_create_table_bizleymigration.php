<?php

use yii\db\Migration;

class m191003_074023_create_table_bizleymigration extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%bizleymigration}}', [
            'id_bizleymigration' => $this->primaryKey(),
            'test' => $this->string(),
            'id_type' => $this->integer()->defaultValue('1'),
        ], $tableOptions);

        $this->addForeignKey('FK_bizleymigration_type_id_type', '{{%bizleymigration}}', 'id_type', '{{%type}}', 'id_type', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%bizleymigration}}');
    }
}
