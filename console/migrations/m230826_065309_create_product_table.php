<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m230826_065309_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'category_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'SKU' => $this->string(),
            'specification' => $this->json(),
            'status' => $this->smallInteger(),
            'price' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'deleted_at' => $this->dateTime(),
        ]);

        $this->addForeignKey('fk_product_category', 'product', 'category_id', 'category', 'id', 'CASCADE');
        $this->addForeignKey('fk_product_brand', 'product', 'brand_id', 'brand', 'id', 'CASCADE');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_product_category', 'product');
        $this->dropForeignKey('fk_product_brand', 'product');
        $this->dropTable('product');
    }

}
