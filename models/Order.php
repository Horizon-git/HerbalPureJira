<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

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
class Order extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */



    public static function tableName()
    {
        return 'order';
    }
    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Orderstatus::className(), 'targetAttribute' => ['id_status' => 'id_status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'id_user' => 'Id User',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'id_status' => 'Id Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Orderstatus::className(), ['id_status' => 'id_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasMany(Orderhasherbal::className(), ['id_order' => 'id_order']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHerbals()
    {
        return $this->hasMany(Herbal::className(), ['id_herbal' => 'id_herbal'])->viaTable('orderhasherbal', ['id_order' => 'id_order']);
    }
}
