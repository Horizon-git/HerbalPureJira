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

class ServiceController extends AppController
{
    public function actionIndex()
    {
        $servername = "herbalpure.org";
        $username = "mysql";
        $password = "mysql";
        $dbname = "services";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $name = "first service";
        $sql = 'SELECT `id`, `URI`, `name`, `description`, `time` FROM `services` WHERE `name` = "first name"';
        $sql2 = 'INSERT INTO `services`(`id`, `URI`, `name`, `description`, `time`) VALUES (1,"herbalpure.org", "first service", "some test description", "2020-12-10 14:40:55" )';

        $rs=$conn->query($sql);

        if($rs === false) {
            trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        } else {
            $rows_returned = $rs->num_rows;
        }
        return $this->render('index', compact('conn','rs'));
    }
}