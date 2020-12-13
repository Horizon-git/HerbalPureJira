<?php

namespace app\modules\admin\models;

use app\modules\admin\models\Order;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * OrderSearch represents the model behind the search form of `app\modules\admin\models\Order`.
 */
class OrderSearch extends Order
{
    public $fullName;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_order', 'id_user', 'id_status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['fullName'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'id_order',
//                'phoneNumber' => [
//                    'asc' => ['user.phone_number' => SORT_ASC],
//                    'desc' => ['user.phone_number' => SORT_DESC],
//                    'label' => 'Номер телефона'
//                ],
                'fullName' => [
                    'asc' => ['user.first_name' => SORT_ASC, 'user.last_name' => SORT_ASC],
                    'desc' => ['user.first_name' => SORT_DESC, 'user.last_name' => SORT_DESC],
                    'label' => 'Имя клинта',
                    'default' => SORT_ASC
                ],
                'created_at',
                'updated_at',
                'id_status',
            ]
        ]);



        if (!($this->load($params) && $this->validate())) {
            /**
             * Жадная загрузка данных модели Страны
             * для работы сортировки.
             */
            return $dataProvider;
        }


        $query->andFilterWhere([
            'order.id_order' => $this->id_order,
        ]);


        // Фильтр по стране
        $query->andWhere('order.created_at LIKE "%'.$this->created_at. '%"');
        $query->andWhere('order.updated_at LIKE "%'.$this->updated_at. '%"');
//        $query->joinWith(['user' => function ($q) {
//            $q->where('user.phone_number LIKE "%' . $this->phoneNumber . '%"');
//        }]);
//
        $query->joinWith(['user' => function ($q) {
            $q->where('user.first_name LIKE "%' . $this->fullName . '%" ' .
                'OR user.last_name LIKE "%' . $this->fullName . '%"');
        }]);


        return $dataProvider;
    }

}
