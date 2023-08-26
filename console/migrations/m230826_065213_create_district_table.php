<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%district}}`.
 */
class m230826_065213_create_district_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('district', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
        ]);

        $this->addForeignKey('fk_district_region', 'district', 'region_id', 'region', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_district_region', 'district');
        $this->dropTable('district');
    }
}
