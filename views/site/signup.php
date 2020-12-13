<?php
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form \yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Региcтрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup container" >
    <div class="row">
        <div class="col-lg-5 col-centered">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Заполните данные поля для прохождения регистрации:</p>
            <?= Html::errorSummary($model)?>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->label('Имя пользователя') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'first_name')->label('Имя') ?>
            <?= $form->field($model, 'last_name')->label('Фамилия') ?>
            <?= $form->field($model, 'phone_number')->label('Номер телефона')?>
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
            <?= $form->field($model, 'retypePassword')->passwordInput()->label('Повторите пароль') ?>
            <div class="form-group">
                <?= Html::submitButton( 'Создать аккаунт', ['class' => 'hb_btn', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
