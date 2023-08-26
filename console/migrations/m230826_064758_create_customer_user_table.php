<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer_user}}`.
 */
class m230826_064758_create_customer_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer_user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'confirmation_code' => $this->integer(),
            'status' => $this->smallInteger(),
        ]);
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customer_user');
    }
}
