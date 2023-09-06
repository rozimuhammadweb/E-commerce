<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $amount
 * @property int|null $payment_system_id
 * @property string|null $transaction_id
 * @property string|null $created_at
 * @property int|null $status
 *
 * @property Order $order
 * @property PaymentSystem $paymentSystem
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'amount', 'payment_system_id', 'status'], 'integer'],
            ['status', 'in', 'range' => [1, -1]],
            [['created_at'], 'safe'],
            [['transaction_id'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
            [['payment_system_id'], 'exist', 'skipOnError' => true, 'targetClass' => PaymentSystem::class, 'targetAttribute' => ['payment_system_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'amount' => 'Amount',
            'payment_system_id' => 'Payment System ID',
            'transaction_id' => 'Transaction ID',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    /**
     * Gets query for [[PaymentSystem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentSystem()
    {
        return $this->hasOne(PaymentSystem::class, ['id' => 'payment_system_id']);
    }
}
