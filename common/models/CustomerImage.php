<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer_image".
 *
 * @property int $id
 * @property int $customer_id
 * @property string $filename
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class CustomerImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile; 

    public static function tableName()
    {
        return 'customer_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'filename'], 'required'],
            [['customer_id'], 'integer'],
            [['customer_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
            [['created_at', 'updated_at'], 'safe'],
            [['filename'], 'string', 'max' => 255],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'filename' => 'Filename',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
