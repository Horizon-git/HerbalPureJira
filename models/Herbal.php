<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "herbal".
 *
 * @property int $id_herbal
 * @property string $name
 * @property string $weight
 * @property string $content
 * @property int $price
 * @property int $amount
 * @property string $image_path
 * @property int $id_category
 * @property string $hit
 * @property string $keywords
 * @property string $description
 *
 * @property Category $category
 * @property Orderhasherbal[] $orderhasherbals
 * @property Order[] $orders
 */
class Herbal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return 'herbal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'hit'], 'string'],
            [['price', 'id_category','amount'], 'integer'],
            [['id_category'], 'required'],
            [['name', 'weight', 'img', 'keywords', 'description'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id_category']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_herbal' => 'Id Herbal',
            'name' => 'Name',
            'weight' => 'Weight',
            'content' => 'Content',
            'price' => 'Price',
            'amount' => 'Amount',
            'img' => 'Image',
            'id_category' => 'Id Category',
            'hit' => 'Hit',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'id_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderhasherbals()
    {
        return $this->hasMany(Orderhasherbal::className(), ['id_herbal' => 'id_herbal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_order' => 'id_order'])->viaTable('orderhasherbal', ['id_herbal' => 'id_herbal']);
    }
}
