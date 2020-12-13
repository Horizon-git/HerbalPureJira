<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace app\controllers;
use app\models\Category;
use app\models\Herbal;
use Yii;
use yii\web\HttpException;

class ProductController extends AppController{

    public function actionView($id){
        $product = Herbal::findOne($id);
        if(empty($product))
            throw new HttpException(404,'Такого товара нет');
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Herbal::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('Herbalpure | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }

} 