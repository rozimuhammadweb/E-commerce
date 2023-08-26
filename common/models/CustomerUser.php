<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer_user".
 *
 * @property int $id
 * @property string|null $username
 * @property int|null $confirmation_code
 * @property int|null $status
 *
 * @property Customer[] $customers
 */
class CustomerUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['confirmation_code', 'status'], 'integer'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'confirmation_code' => 'Confirmation Code',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::class, ['customer_user_id' => 'id']);
    }
}
