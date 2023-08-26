<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m230826_065550_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'ordered_at' => $this->dateTime(),
            'customer_address_id' => $this->integer(),
            'status' => $this->smallInteger(),
            'required_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk_order_customer', 'order', 'customer_id', 'customer', 'id', 'CASCADE');
        $this->addForeignKey('fk_order_customer_address', 'order', 'customer_address_id', 'customer_address', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_order_customer', 'order');
        $this->dropForeignKey('fk_order_customer_address', 'order');
        $this->dropTable('order');
    }
}
