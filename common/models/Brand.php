<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $logo
 * @property string|null $short_name
 *
 * @property Product[] $products
 */
class Brand extends \yii\db\ActiveRecord
{

    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'short_name'], 'required'],
            [['name', 'logo', 'short_name'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'short_name' => 'Short Name',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['brand_id' => 'id']);
    }

    public function upload($imageName)
    {
        if ($this->validate()) {
            $uploadPath = 'uploads/BrandImage/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $this->imageFile->saveAs($uploadPath . $imageName . '.' . $this->imageFile->extension);
            return true;
        }
        return false;
    }
}
