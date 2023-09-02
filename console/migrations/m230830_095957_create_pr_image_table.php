<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pr_image}}`.
 */
class m230830_095957_create_pr_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pr_image}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'image' => $this->string(255),
        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pr_image}}');
    }
}
