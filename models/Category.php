<?php

namespace app\models;

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
        return 'category';
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
            'parent_id' => 'Parent ID',
            'id_category' => 'Id Category',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
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
