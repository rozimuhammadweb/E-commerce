<?php

use yii\db\Migration;

/**
 * Class m230905_082606_add_image_to_banner_table
 */
class m230905_082606_add_image_to_banner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('Banner', 'image', $this->string(255)->null());
    }

    public function safeDown()
    {
        $this->dropColumn('Banner', 'image');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230905_082606_add_image_to_banner_table cannot be reverted.\n";

        return false;
    }
    */
}
