<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment_method}}`.
 */
class m230826_071528_create_payment_method_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('payment_method', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'card_name' => $this->string(),
            'card_number' => $this->string(),
            'card_expire_date' => $this->string(),
        ]);

        $this->addForeignKey('fk_payment_method_customer', 'payment_method', 'customer_id', 'customer', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_payment_method_customer', 'payment_method');
        $this->dropTable('payment_method');
    }
}
