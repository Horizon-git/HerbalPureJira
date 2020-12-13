<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_order',
            'fullName',
//            'phoneNumber',
//            'fullName',
            'created_at',
            'updated_at',
            [
                'attribute' => 'id_status',
                'filter' => false ,
                'value' => function($data){
                    switch ($data->id_status){
                        case 1:
                            return '<span class="label label-default">Не подтвержден</span>';
                        case 2:
                            return '<span class="label label-info">Подтвержден</span>';
                        case 3:
                            return '<span class="label label-danger">Отклонен</span>';
                        case 4:
                            return '<span class="label label-warning">В обработке</span>';
                        case 5:
                            return '<span class="label label-success">Завершен</span>';
                        default:
                            return $data->id_status;
                    }
                },
                'format' => 'html',
            ],
            [
                'attribute' => 'cart',
                'label' => 'Кол-во товаров',
                'value' => function($model){
                $qty = 0;
                foreach ($model->cart as $item){
                    $qty += $item->qty;
                }
                  return $qty;
                },
            ],
            [
                'attribute' => 'cart',
                'label' => 'Сумма',
                'value' => function($model){
                    $sum = 0;
                    foreach ($model->cart as $item){
                        $sum += ($item->herbal->price)*($item->qty);
                    }
                    return $sum;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
