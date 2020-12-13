<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login container ">


    <div class="row">
        <div class="col-lg-5 col-centered">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>Заполните данные поля для прохождения авторизации:</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username')->label('Имя пользователя') ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
            <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня') ?>
            <div style="color:#999;margin:1em 0">
               Если вы новый пользователь, то <?= Html::a('Зарегистрируйтесь', ['site/signup'], ['style' => 'color:#54bc59']) ?>.
            </div>
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'hb_btn', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

