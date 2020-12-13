<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language ?>" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language ?>" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <title><?= Html::encode($this->title) ?></title>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="MobileOptimized" content="320">
    <!--srart theme style -->

    <!-- end theme style -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:800" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="hb_preloader_wrapper">
    <div id="hb_preloader_box">
        <div class="flower">
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
            <svg class="flower__leaf flower__leaf--default" height="22" viewbox="0 0 14 22" width="14"><path d="M6.673 20.87c.666.636 1.506 1.234 1.506 1.234S-.743 18.956.21 9.924C.618 6.084 2.896 2.79 6.875.12c.487-.327 1.143-.293 1.61.083.2.163 4.868 3.988 5.336 9.796.303 3.745-1.2 7.388-4.462 10.826l-1.353-1.26s-.286-.205-.348-.514l-.182-.01c-3.757-7.04.43-13.195.43-13.195-1.402 5.468.184 9.927.98 12.022 3.055-3.832 4.7-10.286-1.022-16.197-6.13 3.16-9.006 11.954-1.19 19.196z"></path></svg>
        </div>
    </div>
</div>
<div id="myHeader">
    <div class="hb_topheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="hb_header_social_icon">
                        <ul>
                            <?php if(Yii::$app->user->isGuest): ?>
                                <li ><a href="<?= Url::to(['/site/login'])?>" style="margin-top: -5px;font-size: 14px;"><i class="flaticon-login"></i>  Войдите в аккаунт</a></li>
                            <?php else:?>
                                <li>
                                    <?= HTML::beginForm(['/site/logout'],'post',['style' => 'margin-top: -5px;font-size: 14px;']);?>
                                    <span class="logout">Здравствуйте <?=Yii::$app->user->identity->username;?>,
                                    <?= HTML::submitButton('Выйти',
                                        ['class' => 'btn btn-link',]);?></span>
                                    <?= HTML::endForm();?>
                                </li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                    <div class="hb_logo">
                        <a href=<?= Url::to(['/'])?>><img src="/images/logo.png" class="img-responsive" alt="лого"></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="hb_header_right_links">
                        <ul>
                            <li class="hb_search_wrapper"><a href="#" class="hb_search_icon"><i class="flaticon-search-2"></i></a>
                                <div class="hb_search_form">
                                    <form  action="<?= Url::to(['category/search'])?>">
                                        <input type="text" class="form-control hb_search" placeholder="Поиск..." name="q">
                                    </form>
                                </div>
                            </li>

                            <li><a href="<?= Url::to(['cart/view'])?>" style="margin-top: -7px;z-index: 99;">  <span class="p1 fa-2x has-badge" id="cartCount" data-count=<?=isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] : 0;?>><i class="flaticon-empty-shopping-cart"></i></span></a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hb_main_header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hb_menu">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li ><a href=<?= Url::to(['/admin/order'])?>>Главная</a></li>
                                <li ><a href=<?= Url::to(['/admin/category'])?>>Категории</a>
                                    <ul class="sub-menu">
                                        <li ><a href=<?= Url::to(['/admin/category'])?>>Список категорий</a></li>
                                        <li ><a href=<?= Url::to(['/admin/category/create'])?>>Добавить категорию</a></li>

                                    </ul>
                                </li>
                                <li ><a href=<?= Url::to(['/admin/herbal'])?>>Товары</a>
                                    <ul class="sub-menu">
                                        <li ><a href=<?= Url::to(['/admin/herbal'])?>>Список товаров</a></li>
                                    </ul>
                                </li>
                                <li ><a href=<?= Url::to(['/admin/query/index'])?>>Любимый пользователь</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content container" style="margin-top: 20px;">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <?= $content; ?>
</div>

<div class="hb_footer_wrapper hb_toppadder80 hb_bottompadder40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="hb_footerdiv">
                    <img src="/images/logo.png" class="img-responsive" alt="">
                    <p>Etiam blandit velit at mauriseat venenatis, quis tempus exproture euismod. Vivamus molestie, risus at commodo gravida, leo neque maximus lorem, quis cursus massa lorem ut nulla. </p>
                    <div class="hb_social_icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="hb_footerdiv">
                    <h3>Оставайтесь на связи</h3>
                    <ul class="hb_footer_contact">
                        <li>
                            <span><i class="flaticon-close-envelope"></i></span>
                            <p><a href="#">oleksandr.sherashov@nure.ua</a></p>
                        </li>
                        <li>
                            <span><i class="flaticon-telephone"></i></span>
                            <p>8-800-555-35-35</p>
                        </li>
                        <li>
                            <span><i class="flaticon-home"></i></span>
                            <p>проспект Науки, 14, Харків, Харківська область, 61000</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="snackbar">Товар успешно добавлен в корзину</div>
<?php
//\yii\bootstrap\Modal::begin([
//    'header' => '<h2>Корзина</h2>',
//    'id' => 'cart',
//    'size' => 'modal-lg',
//    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
//        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
//        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
//]);
//
//\yii\bootstrap\Modal::end();
//?>
<script src="<?= Url::to(['@web/js/jquery.min.js']) ?>"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
