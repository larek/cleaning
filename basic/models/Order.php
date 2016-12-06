<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $type
 * @property string $square
 * @property string $money
 * @property string $phone
 * @property string $name
 * @property string $dateCreated
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['dateCreated'], 'safe'],
            [['type', 'square', 'money', 'phone','name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'square' => 'Square',
            'money' => 'Money',
            'phone' => 'Phone',
            'name' => 'Name',
            'dateCreated' => 'Date Created',
        ];
    }
}
