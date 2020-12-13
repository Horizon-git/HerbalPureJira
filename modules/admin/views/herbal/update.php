<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Herbal */

$this->title = 'Обновить данные о  товаре: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Herbals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_herbal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="herbal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
