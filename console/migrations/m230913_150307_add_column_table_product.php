<?php

use yii\db\Migration;

/**
 * Class m230913_150307_add_column_table_product
 */
class m230913_150307_add_column_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product' , 'image' , $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230913_150307_add_column_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230913_150307_add_column_table_product cannot be reverted.\n";

        return false;
    }
    */
}
