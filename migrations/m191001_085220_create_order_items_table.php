<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_items}}`.
 */
class m191001_085220_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order_items}}', [
            'id_order_items' => $this->primaryKey(),
            'id_order' => $this->integer()->notNull(),
            'id_item' => $this->integer()->notNull(),
        ]);

        //
        $this->createIndex('id-order_items-id_order','order_items','id_order');
        $this->createIndex('id-order_items-id_item','order_items','id_item');

        //
        $this->addForeignKey('fk-order_items-id_order','order_items','id_order','order','id_order','CASCADE');
        $this->addForeignKey('fk-order_items-id_item','order_items','id_item','items','id_item','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order_items}}');
        $this->dropIndex('id-order_items-id_order','order_items');
        $this->dropForeignKey('fk-order_items-id_order','order_items');
        $this->dropIndex('id-order_items-id_order','order_items');
        $this->dropForeignKey('fk-order_items-id_item','order_items');
    }
}
