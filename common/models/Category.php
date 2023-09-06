<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int|null $PID
 * @property string|null $name
 * @property int|null $status
 * @property string|null $image
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PID', 'status'], 'integer'],
            ['status', 'in', 'range' => [1, 0]],
            [['name', 'image'], 'string', 'max' => 255],
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
            'PID' => 'Pid',
            'name' => 'Name',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['category_id' => 'id']);
    }

    public function upload($imageName)
    {
        if ($this->validate()) {
            $uploadPath = 'uploads/CategoryImage/';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            $this->imageFile->saveAs($uploadPath . $imageName . '.' . $this->imageFile->extension);
            return true;
        }
        return false;
    }
}
