<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_image}}`.
 */
class m230826_065321_create_product_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_image', [
            'product_id' => $this->integer(),
            'image' => $this->string(),
            'order' => $this->smallInteger(),
            'main_image' => $this->boolean(),
        ]);

        $this->addPrimaryKey('pk_product_image', 'product_image', 'product_id');
        $this->addForeignKey('fk_product_image_product', 'product_image', 'product_id', 'product', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_image_product', 'product_image');
        $this->dropPrimaryKey('pk_product_image', 'product_image');
        $this->dropTable('product_image');
    }
}
