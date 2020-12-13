<?php

use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запрос';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if ($rs->num_rows > 0) {
        echo "<table class='table-bordered table-hover table-responsive table-striped table'><thead><tr><th scope = 'col'>Имя пользователя</th><th scope = 'col'>Номер телефона</th><th scope = 'col'>Количество заказов</th><th scope = 'col'>Сумма товаров в заказе</th></thead></tr><tbody>";
        // output data of each row
        while($row = $rs->fetch_assoc()) {
            echo "<tr style='padding: 10px'><td>".Html::encode($row["name"])."</td><td>".Html::encode($row["phone_number"])."</td><td> ".Html::encode($row["amount"])."</td><td> ".Html::encode($row["total"])."</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "0 результатов";
    }

    ?>



</div>