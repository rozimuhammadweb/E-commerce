<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_char".
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $atttribute
 * @property string|null $value
 */
class ProductChar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_char';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id'], 'integer'],
            [['atttribute', 'value'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'atttribute' => 'Atttribute',
            'value' => 'Value',
        ];
    }
}
