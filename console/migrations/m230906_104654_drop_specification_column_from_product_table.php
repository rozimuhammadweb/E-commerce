<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%product}}`.
 */
class m230906_104654_drop_specification_column_from_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%product}}', 'specification');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%product}}', 'specification', $this->json());
    }
}
