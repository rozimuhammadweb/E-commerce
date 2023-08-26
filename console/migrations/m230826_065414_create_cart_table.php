<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cart}}`.
 */
class m230826_065414_create_cart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cart', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'count' => $this->integer(),
            'session' => $this->string(),
            'user_id' => $this->integer(),
            'added_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk_cart_product', 'cart', 'product_id', 'product', 'id', 'CASCADE');
        $this->addForeignKey('fk_cart_user', 'cart', 'user_id', 'user', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_cart_product', 'cart');
        $this->dropForeignKey('fk_cart_user', 'cart');
        $this->dropTable('cart');
    }
}
