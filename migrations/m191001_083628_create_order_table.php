<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m191001_083628_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id_order' => $this -> primaryKey(),
            'date' => $this -> date() -> notNull(),
            'status' => $this -> string() -> notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
