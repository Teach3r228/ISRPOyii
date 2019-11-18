<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property int $IdUser
 * @property string $NameUser
 * @property string $Login
 * @property string $Password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NameUser', 'Login', 'Password'], 'required'],
            [['NameUser', 'Login', 'Password'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUser' => 'Id User',
            'NameUser' => 'Name User',
            'Login' => 'Login',
            'Password' => 'Password',
        ];
    }
}
