<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_char}}`.
 */
class m230905_083254_create_product_char_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_char}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'atttribute' => $this->string(100),
            'value' => $this->string(100),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_char}}');
    }
}
