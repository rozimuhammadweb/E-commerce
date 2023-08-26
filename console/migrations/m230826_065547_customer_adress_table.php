<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customer_adress}}`.
 */
class m230826_065547_customer_adress_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer_address', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer(),
            'region_id' => $this->integer(),
            'district_id' => $this->integer(),
            'address' => $this->text(),
            'zipcode' => $this->string(),
            'phone_number' => $this->string(),
        ]);

        $this->addForeignKey('fk_customer', 'customer_address', 'customer_id', 'customer', 'id', 'CASCADE');
        $this->addForeignKey('fk_region', 'customer_address', 'region_id', 'region', 'id', 'CASCADE');
        $this->addForeignKey('fk_district', 'customer_address', 'district_id', 'district', 'id', 'CASCADE');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_customer', 'customer_address');
        $this->dropForeignKey('fk_region', 'customer_address');
        $this->dropForeignKey('fk_district', 'customer_address');
        $this->dropTable('customer_address');
    }
}
