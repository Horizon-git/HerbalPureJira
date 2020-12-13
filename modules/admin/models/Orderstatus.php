<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "orderstatus".
 *
 * @property string $status
 * @property int $id_status
 *
 * @property Order[] $orders
 */
class Orderstatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderstatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_name' => 'Статус заказа',
            'id_status' => 'Id Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_status' => 'id_status']);
    }
}
