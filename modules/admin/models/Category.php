<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $parent_id
 * @property int $id_category
 * @property string $name
 * @property string $keywords
 * @property string $description
 *
 * @property Herbal[] $herbals
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'parent_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'parent_id' => 'Родительская категория',
            'id_category' => 'Id',
            'name' => 'Наименование',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */



    public function getHerbals()
    {
        return $this->hasMany(Herbal::className(), ['id_category' => 'id_category']);
    }

}
