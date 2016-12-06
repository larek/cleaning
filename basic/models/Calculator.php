<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calculator".
 *
 * @property integer $id
 * @property string $key
 * @property integer $value
 * @property integer $type
 */
class Calculator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calculator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'value', 'type'], 'required'],
            [['value', 'type'], 'integer'],
            [['key'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'type' => 'Type',
        ];
    }
}
