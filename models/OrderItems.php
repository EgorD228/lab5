<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id_order_items
 * @property int $id_order
 * @property int $id_item
 *
 * @property Items $item
 * @property Order $order
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'id_item'], 'required'],
            [['id_order', 'id_item'], 'integer'],
            [['id_item'], 'exist', 'skipOnError' => true, 'targetClass' => Items::className(), 'targetAttribute' => ['id_item' => 'id_item']],
            [['id_order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order' => 'id_order']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order_items' => 'Id Order Items',
            'id_order' => 'Id Order',
            'id_item' => 'Id Item',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Items::className(), ['id_item' => 'id_item']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id_order' => 'id_order']);
    }
}
