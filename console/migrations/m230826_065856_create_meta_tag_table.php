<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meta_tag}}`.
 */
class m230826_065856_create_meta_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('meta_tag', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'title' => $this->string(250),
            'description' => $this->text(),
            'keywords' => $this->string(250),
            'og_title' => $this->string(250),
            'og_description' => $this->text(),
            'og_image_url' => $this->string(250),
            'twitter_title' => $this->string(250),
            'twitter_description' => $this->text(),
            'twitter_image_url' => $this->string(250),
            'canonical_url' => $this->string(250),
        ]);

        $this->addForeignKey('fk_meta_tag_product', 'meta_tag', 'product_id', 'product', 'id', 'CASCADE');
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_meta_tag_product', 'meta_tag');
        $this->dropTable('meta_tag');
    }
}
