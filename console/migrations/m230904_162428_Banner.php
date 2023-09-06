<?php

use yii\db\Migration;

/**
 * Class m230904_162428_Banner
 */
class m230904_162428_Banner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Banner', [
            'id' => $this->primaryKey(),
            'url' => $this->string(255)->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Banner');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230904_162428_Banner cannot be reverted.\n";

        return false;
    }
    */
}
