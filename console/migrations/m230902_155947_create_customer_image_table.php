<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer_image}}`.
 */
class m230902_155947_create_customer_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%customer_image}}', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'filename' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);

        $this->addForeignKey('fk_customer_image', 'customer_image', 'customer_id', 'customer', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%customer_image}}');
    }
}
