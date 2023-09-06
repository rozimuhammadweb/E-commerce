<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int|null $customer_id
 * @property string|null $ordered_at
 * @property int|null $customer_address_id
 * @property int|null $status
 * @property string|null $required_at
 *
 * @property Customer $customer
 * @property CustomerAddress $customerAddress
 * @property OrderDetail[] $orderDetails
 * @property Payment[] $payments
 * @property Product[] $products
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'customer_address_id', 'status'], 'integer'],
            ['status', 'in', 'range' => [1, -1]],
            [['ordered_at', 'required_at'], 'safe'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::class, 'targetAttribute' => ['customer_id' => 'id']],
            [['customer_address_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerAddress::class, 'targetAttribute' => ['customer_address_id' => 'id']],
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
            'ordered_at' => 'Ordered At',
            'customer_address_id' => 'Customer Address ID',
            'status' => 'Status',
            'required_at' => 'Required At',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[CustomerAddress]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddress()
    {
        return $this->hasOne(CustomerAddress::class, ['id' => 'customer_address_id']);
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['id' => 'product_id'])->viaTable('order_detail', ['order_id' => 'id']);
    }
}
