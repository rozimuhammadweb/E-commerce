<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer}}`.
 */
class m230826_064823_create_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'customer_user_id' => $this->integer(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'middle_name' => $this->string(),
            'gender' => $this->string(),
            'birth_date' => $this->date(),
            'registered_at' => $this->dateTime(),
            'status' => $this->smallInteger(),
        ]);

        $this->addForeignKey('fk_customer_user', 'customer', 'customer_user_id', 'customer_user', 'id', 'CASCADE');
    }


    /**
     * {@inheritdoc}
     */

    public function safeDown()
    {
        $this->dropForeignKey('fk_customer_user', 'customer');
        $this->dropTable('customer');
    }
}
