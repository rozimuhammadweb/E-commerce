<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meta_tag".
 *
 * @property int $id
 * @property int|null $product_id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $keywords
 * @property string|null $og_title
 * @property string|null $og_description
 * @property string|null $og_image_url
 * @property string|null $twitter_title
 * @property string|null $twitter_description
 * @property string|null $twitter_image_url
 * @property string|null $canonical_url
 *
 * @property Product $product
 */
class MetaTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id'], 'integer'],
            [['description', 'og_description', 'twitter_description'], 'string'],
            [['title', 'keywords', 'og_title', 'og_image_url', 'twitter_title', 'twitter_image_url', 'canonical_url'], 'string', 'max' => 250],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'og_title' => 'Og Title',
            'og_description' => 'Og Description',
            'og_image_url' => 'Og Image Url',
            'twitter_title' => 'Twitter Title',
            'twitter_description' => 'Twitter Description',
            'twitter_image_url' => 'Twitter Image Url',
            'canonical_url' => 'Canonical Url',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'product_id']);
    }
}
