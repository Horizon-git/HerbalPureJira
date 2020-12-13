<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Herbal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Herbals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="herbal-view">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id_herbal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id_herbal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_herbal',
            [
                'attribute' => 'id_category',
                'label' => 'Категория',
                'value' => function($data){
                    return $data->category->name;
                },
            ],
            'name',
            'weight',
            'content:html',
            'price',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('400x')}'>",
                'format' => 'html',
            ],
            [
                'attribute' => 'hit',
                'value' => function($data){
                    return !$data->hit ? '<span class="text-danger">Нет</span>' : '<span class="text-success">Да</span>';
                },
                'format' => 'html',
            ],
            'keywords',
            'description',
        ],
    ]) ?>

</div>
