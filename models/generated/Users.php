<?php

namespace app\models\generated;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $FirstName
 * @property string $LastName
 * @property string $MiddleName
 * @property string $Email
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'LastName', 'MiddleName', 'Email'], 'required'],
            [['FirstName', 'LastName', 'MiddleName'], 'string', 'max' => 50],
            [['Email'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FirstName' => 'Имя',
            'LastName' => 'Фамилия',
            'MiddleName' => 'Отчество',
            'Email' => 'Электронная почта',
        ];
    }
}
