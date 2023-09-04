<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $category_id
 * @property int|null $brand_id
 * @property string|null $SKU
 * @property string|null $specification
 * @property int|null $status
 * @property int|null $price
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Brand $brand
 * @property Cart[] $carts
 * @property Category $category
 * @property MetaTag[] $metaTags
 * @property OrderDetail[] $orderDetails
 * @property Order[] $orders
 * @property ProductImage $productImage
 */
class Product extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['category_id', 'brand_id', 'status', 'price'], 'integer'],
            [['specification', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['title', 'SKU'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],

            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::class, 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'brand_id' => 'Brand ID',
            'SKU' => 'Sku',
            'specification' => 'Specification',
            'status' => 'Status',
            'price' => 'Price',
            
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::class, ['id' => 'brand_id']);
    }

    /**
     * Gets query for [[Carts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[MetaTags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMetaTags()
    {
        return $this->hasMany(MetaTag::class, ['product_id' => 'id']);
    }
    public function getProductImages()
    {
        return $this->hasMany(ProductImage::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[OrderDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id' => 'order_id'])->viaTable('order_detail', ['product_id' => 'id']);
    }

    /**
     * Gets query for [[ProductImage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductImage()
    {
        return $this->hasOne(ProductImage::class, ['product_id' => 'id']);
    }

    public function getCategories()
    {
        return Category::find()->all();
    }

    public function getBrands()
    {
        return Brand::find()->all();
    }

    public function upload($imageName)
    {
    if ($this->validate()) {
        $this->imageFile->saveAs('uploads/productImage/' . $imageName . '.' . $this->imageFile->extension);
        return true;
    } else {
        return false;
    }
}

}
