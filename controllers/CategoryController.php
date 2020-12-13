<?php

namespace app\controllers;
use app\models\Category;
use app\models\Herbal;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class CategoryController extends AppController{

    public function actionIndex(){
        $query = Herbal::find()->where(['hit' => '1'])->limit(6);
        $min_price = Herbal::find()->min('price');
        $max_price = Herbal::find()->max('price');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $hits = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Features');
        return $this->render('index', compact('hits','pages','min_price','max_price'));
    }

    public function actionView($id){
        $category = Category::findOne($id);
        $min_price = Herbal::find()->min('price');
        $max_price = Herbal::find()->max('price');

        if(empty($category))
            throw new HttpException(404,'Такой категории нет');
//        $Herbals = Herbal::find()->where(['category_id' => $id])->all();
        $query = Herbal::find()->where(['id_category' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('Herbalpure | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category','min_price','max_price'));
    }

    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $min_price = Herbal::find()->min('price');
        $max_price = Herbal::find()->max('price');
        $this->setMeta('Herbal Pure | Поиск: ' . $q);
        if(!$q)
            return $this->render('search');
        $query = Herbal::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q','min_price','max_price'));
    }

    public function actionFilter(){
        $min = Yii::$app->request->get('min');
        $max = Yii::$app->request->get('max');

        $query = Herbal::find()->filterWhere([
            'and',
            ['>', 'price', $min+1],
            ['<', 'price', $max+1],
        ]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->renderPartial('filter', compact('products', 'pages'));
    }
} 