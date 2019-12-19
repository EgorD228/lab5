<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property string $nickname
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nickname', 'password'], 'required'],
            [['nickname', 'password'], 'string', 'max' => 255],
            [['nickname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'nickname' => 'Nickname',
            'password' => 'Password',
        ];
    }


    public function getUsers() {

    }
}
