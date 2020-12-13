<?php

namespace app\controllers;
use app\models\Herbal;
use app\models\Cart;
use app\models\Order;
use app\models\OrderHasHerbal;
use Yii;



class CartController extends AppController{

    public function actionAdd(){
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty;
        $product = Herbal::findOne($id);
        if(empty($product) || ($qty > $product->amount)) return false;
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        if( !Yii::$app->request->isAjax ){
            return $this->redirect(Yii::$app->request->referrer);
        }
        return $this->asJson([
            'cart_count' => $session['cart.qty'],
            'html' => $this->renderPartial('cart',compact('session'))
        ]);
    }

    public function actionClear(){
        $session =Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->asJson([
            'cart_count' => $session['cart.qty'],
            'html' => $this->renderPartial('cart',compact('session'))
        ]);
    }

    public function actionDelItem(){
        $id = Yii::$app->request->get('id');
        $session =Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);
        $this->layout = false;
        return $this->asJson([
            'cart_count' => $session['cart.qty'],
            'html' => $this->renderPartial('cart',compact('session'))
        ]);
    }

    public function actionShow(){
        $session =Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->asJson([
            'cart_count' => $session['cart.qty'],
            'html' => $this->renderPartial('cart',compact('session'))
        ]);
    }


    public function actionView(){
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');

        return $this->render('view', compact('session'));
    }

    public function actionOrder(){
        $session = Yii::$app->session;
        $session->open();
        if (!$session['cart'])
            return $this->redirect(['/category/index']);
        $id_user = Yii::$app->getUser()->id;
        $this->setMeta('Оформление заказа');
        $order = new Order();
        $order->id_user = $id_user;
            if($order->save()){
                $this->saveOrderItems($session['cart'], $order->id_order);
                Yii::$app->session->setFlash('success', 'Ваш заказ принят. Менеджер вскоре свяжется с Вами.');
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка оформления заказа');
            }
        return $this->render('order', compact('session', 'order'));
    }

    protected function saveOrderItems($items, $order_id){
//        $db = Yii::$app->db;
//        $transaction = $db->beginTransaction();
        foreach($items as $id_herbal => $item){
            $order_items = new OrderHasHerbal();
            $order_items->id_order = $order_id;
            $order_items->id_herbal = $id_herbal;
            $herbal = Herbal::findOne($id_herbal);
            $herbal->amount -= $item['qty'];
            $herbal->save();
            $order_items->qty = $item['qty'];
            $order_items->save();
        }
    }

} 