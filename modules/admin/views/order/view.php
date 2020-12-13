<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->id_order;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1>Детали заказа №<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id_order], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_order], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_order',
            'id_user',
            'created_at',
            'updated_at',
            'user.phone_number',
            'fullName',
            'user.email:email',
            [
                'attribute' => 'id_status',
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
        ],
    ]) ?>

    <h4>Товары в заказе:</h4>
    <?php $items = $model->cart;?>
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Сумма</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($items as $item):?>
                <tr>
                    <td><a href="<?= \yii\helpers\Url::to(['/product/view', 'id' => $item->id_herbal])?>"><?= $item->herbal->name?></a></td>
                    <td><?= $item['qty']?></td>
                    <td><?= $item->herbal->price?></td>
                    <td><?= $item['qty']*$item->herbal->price?></td>
                </tr>
            <?php endforeach?>
            </tbody>
        </table>
    </div>
</div>
