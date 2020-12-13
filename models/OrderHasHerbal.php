<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderhasherbal".
 *
 * @property int $id_order
 * @property int $id_herbal
 * @property int $qty
 *
 * @property Herbal $herbal
 * @property Order $order
 */
class OrderHasHerbal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderhasherbal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'id_herbal'], 'required'],
            [['id_order', 'id_herbal', 'qty'], 'integer'],
            [['id_order', 'id_herbal'], 'unique', 'targetAttribute' => ['id_order', 'id_herbal']],
            [['id_herbal'], 'exist', 'skipOnError' => true, 'targetClass' => Herbal::className(), 'targetAttribute' => ['id_herbal' => 'id_herbal']],
            [['id_order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order' => 'id_order']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'id_herbal' => 'Id Herbal',
            'qty' => 'Qty',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHerbal()
    {
        return $this->hasOne(Herbal::className(), ['id_herbal' => 'id_herbal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id_order' => 'id_order']);
    }
}
