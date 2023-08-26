<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment}}`.
 */
class m230826_065833_create_payment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('payment', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(),
            'amount' => $this->integer(),
            'payment_system_id' => $this->integer(),
            'transaction_id' => $this->string(),
            'created_at' => $this->dateTime(),
            'status' => $this->smallInteger(),
        ]);

        $this->addForeignKey('fk_payment_order', 'payment', 'order_id', 'order', 'id', 'CASCADE');
        $this->addForeignKey('fk_payment_payment_system', 'payment', 'payment_system_id', 'payment_system', 'id', 'CASCADE');
    }





    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_payment_order', 'payment');
        $this->dropForeignKey('fk_payment_payment_system', 'payment');
        $this->dropTable('payment');
    }
}
