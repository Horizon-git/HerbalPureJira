<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\User;
use mysqli;
use Yii;
use app\modules\admin\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class QueryController extends Controller
{
    public function actionIndex()
    {
        $servername = "herbalpure.org";
        $username = "mysql";
        $password = "mysql";
        $dbname = "herbalpure";

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = 'SELECT CONCAT(user.first_name,\' \',user.last_name) as name, user.phone_number, COUNT(order.id_order) amount, SUM(herbal.price*orderhasherbal.qty) total
                from user
                LEFT JOIN `order` ON user.id=`order`.id_user
                LEFT JOIN orderhasherbal ON `order`.id_order = orderhasherbal.id_order
                LEFT JOIN herbal ON orderhasherbal.id_herbal = herbal.id_herbal
                GROUP BY user.first_name,user.last_name,user.phone_number
                ORDER BY total DESC';

        $rs=$conn->query($sql);

        if($rs === false) {
            trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        } else {
            $rows_returned = $rs->num_rows;
        }
        return $this->render('index', compact('conn','rs'));
    }
}