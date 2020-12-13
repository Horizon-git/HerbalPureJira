<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "herbal".
 *
 * @property int $id_herbal
 * @property string $name
 * @property string $weight
 * @property string $content
 * @property int $price
 * @property string $img
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

    public $image;

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
            [['price', 'id_category'], 'integer'],
            [['id_category'], 'required'],
            [['name', 'weight', 'img', 'keywords', 'description'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['id_category' => 'id_category']],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_herbal' => 'Id',
            'name' => 'Наименование',
            'weight' => 'Вес/кол-во',
            'content' => 'Описание',
            'price' => 'Цена',
            'image' => 'Фото',
            'id_category' => 'Категория',
            'hit' => 'Хит',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
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

    public function upload(){
        if($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
