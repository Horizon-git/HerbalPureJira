<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id_order
 * @property int $id_user
 * @property string $created_at
 * @property string $updated_at
 * @property int $id_status
 *
 * @property User $user
 * @property Orderstatus $status
 * @property Orderhasherbal[] $orderhasherbals
 * @property Herbal[] $herbals
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['id_user', 'id_status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    public function getPhoneNumber() {
        return $this->user->phone_number;
    }

    public function getFullName() {
        return $this->user->first_name . ' ' . $this->user->last_name;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Orderstatus::className(), ['id_status' => 'id_status']);
    }

    public function getStatusName() {
        return $this->status->status_name;
    }

    public function getCart()
    {
        return $this->hasMany(OrderHasHerbal::className(), ['id_order' => 'id_order']);
    }


    public function getHerbals()
    {
        return $this->hasMany(Herbal::className(), ['id_herbal' => 'id_herbal'])->viaTable('orderhasherbal', ['id_order' => 'id_order']);
    }

    public function attributeLabels()
    {
        return [
            'id_order' => 'Id заказа',
            'id_user' => 'Id Пользователя',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'id_status' => 'Статус',
            'fullName' => 'Имя клиента',
            'phoneNumber' => 'Номер телефона',
            'statusName' => 'Статус заказа',
        ];
    }
}
