<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_detail}}`.
 */
class m230826_065746_create_order_detail_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order_detail', [
            'order_id' => $this->integer(),
            'product_id' => $this->integer(),
            'count' => $this->integer(),
        ]);

        $this->addPrimaryKey('pk_order_detail', 'order_detail', ['order_id', 'product_id']);
        $this->addForeignKey('fk_order_detail_order', 'order_detail', 'order_id', 'order', 'id', 'CASCADE');
        $this->addForeignKey('fk_order_detail_product', 'order_detail', 'product_id', 'product', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_order_detail_order', 'order_detail');
        $this->dropForeignKey('fk_order_detail_product', 'order_detail');
        $this->dropPrimaryKey('pk_order_detail', 'order_detail');
        $this->dropTable('order_detail');
    }
}
