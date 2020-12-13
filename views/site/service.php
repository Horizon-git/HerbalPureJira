<?php


namespace app\controllers;
use app\models\Category;
use app\models\Herbal;
use Yii;
use yii\web\HttpException;
use mysqli;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

$this->title = 'Сервисы';
$this->params['breadcrumbs'][] = $this->title;


        
       
        
            $servername = "herbalpure.org";
            $username = "mysql";
            $password = "mysql";
            $dbname = "services";
            $date = date("Y-m-d H:i:s");
    
            $name = "third service";
            $conn = new mysqli($servername, $username, $password, $dbname);
           
        $sql = "SELECT `id`, `URI`, `name`, `description`, `time` FROM `services` WHERE `name` = '$name'";
        $sql2 = "INSERT INTO `services`( `URI`, `name`, `description`, `time`) VALUES ('herbalpure.org', '$name', 'some test description', '$date')";
        $sql3 = "SELECT `URI` FROM `services` WHERE `name` = '$name'";
        $rs=$conn->query($sql);
        if ($rs->num_rows == 0){
            if ($conn->query($sql2) === TRUE) {
                echo "New record created successfully";
            }
            else {
                echo "Произошла ошибка при вставке";
            }
        }
        else {
            echo "Сервис с таким названием уже существует";
        }
        if($rs === false) {
            trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        } else {
            $rows_returned = $rs->num_rows;
        }
        $conn->close();
    

    
        
    
        ?>
    <div class="category-index">

<h1><?= Html::encode($this->title) ?></h1>

<?php
echo $rows["URI"];
if ($rows->num_rows > 0) {
    echo "<table class='table-bordered table-hover table-responsive table-striped table'><thead><tr><th scope = 'col'>Имя пользователя</th><th scope = 'col'>Номер телефона</th><th scope = 'col'>Количество заказов</th><th scope = 'col'>Сумма товаров в заказе</th></thead></tr><tbody>";
    // output data of each row
    while($row = $rows->fetch_assoc()) {
        echo "<tr style='padding: 10px'><td>".Html::encode($row["URI"])."</td><td>".Html::encode($row["phone_number"])."</td><td> ".Html::encode($row["amount"])."</td><td> ".Html::encode($row["total"])."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 результатов";
}

?>



</div>