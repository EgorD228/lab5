<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%type}}`.
 */
class m191001_080442_create_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('type', [
            'id_type' => $this->primaryKey(),
            'type' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%type}}');
    }
}
