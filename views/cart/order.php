<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<div class="container">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>
    <p>Номер телефона для связи с вами: <?=$order->user->phone_number;?></p>
    <h4>Товары в заказе:</h4>
    <?php $items = $order->cart;?>
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
                    <?php $sum += $item['qty']*$item->herbal->price;
                    $totalQty += $item['qty'];
                    ?>
                </tr>
            <?php endforeach?>

            </tbody>
        </table>
        <p>Всего товаров в заказе: <?= $totalQty?></p>
        <p>Сумма товаров в заказе: ₴<?= $sum?></p>
    </div>
</div>
