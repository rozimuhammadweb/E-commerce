<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%payment_system}}`.
 */
class m230826_065823_create_payment_system_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('payment_system', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('payment_system');
    }
}
