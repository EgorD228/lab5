<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m191001_080443_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id_user' => $this->primaryKey(),
            'nickname' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'id_type'=> $this->integer()->notNull(),
        ]);

        $this->createIndex('id-user-id_type','users','id_type');
        $this->addForeignKey('fk-user-id_type','users','id_type','type','id_type','CASCADE');
    }

    public function down()
    {
        $this->dropIndex('id-user-id_type','users');
        $this->dropForeignKey('fk-user-id_type','users');
        $this->dropTable('users');
    }

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id_user' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
