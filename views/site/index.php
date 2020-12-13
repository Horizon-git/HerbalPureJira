<?php

/* @var $this yii\web\View */

$this->title = 'Herbal Pure';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager; ?>

<div class="hb_slider_wrapper">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="hb_slider_data">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hb_padder0 hidden-sm hidden-xs">
                    <div class="hb_leaf_img">
                        <?= Html::img("@web/images/leaf.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right hb_padder0">
                    <div class="hb_sliderimg">
                        <?= Html::img("@web/images/herbs1.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="hb_banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="hb_banner_content">
                                    <h2>Herbal Pure<br>100% Органика</h2>
                                    <p>curabitur non rutrum nisl praesent <br>tempor justo non ligula mollis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="hb_slider_data">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hb_padder0 hidden-sm hidden-xs">
                    <div class="hb_leaf_img">
                        <?= Html::img("@web/images/leaf.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right hb_padder0">
                    <div class="hb_sliderimg">
                        <?= Html::img("@web/images/herbs1.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="hb_banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="hb_banner_content">
                                    <h2>Худейте вместе<br>с нами</h2>
                                    <p>curabitur non rutrum nisl praesent <br>tempor justo non ligula mollis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="hb_slider_data">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hb_padder0 hidden-sm hidden-xs">
                    <div class="hb_leaf_img">
                        <?= Html::img("@web/images/leaf.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right hb_padder0">
                    <div class="hb_sliderimg">
                        <?= Html::img("@web/images/herbs1.png", ['alt' => 'leaf','class' => 'img-responsive'])?>
                    </div>
                </div>
                <div class="hb_banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="hb_banner_content">
                                    <h2>время сбалансировать<br>свою жизнь</h2>
                                    <p>curabitur non rutrum nisl praesent <br>tempor justo non ligula mollis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hb_white_wrapper hb_toppadder80 hb_bottompadder40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm1-12 col-xs-12">
                <div class=" hb_mainheading hb_bottompadder40">
                    <h2>Особенности</h2>
                    <h3><a href="<?= Url::to(['site/about']) ?>">Почему Herbal Pure</a></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="hb_feature_image">
                    <div class="hb_left_top_border"></div>
                    <div class="hb_right_bottom_border"></div>
                    <img src="/images/feature_img.jpg" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hb_toppadder70">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hb_feature_data">
                            <div class="hb_feature_icon">
                                <i class="flaticon-herbal-spa-treatment-leaves"></i>
                            </div>
                            <div class="hb_feature_content">
                                <h4>100 % ОРГАНИКА</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hb_feature_data">
                            <div class="hb_feature_icon">
                                <i class="flaticon-favorite-heart-button"></i>
                            </div>
                            <div class="hb_feature_content">
                                <h4>выбор людей</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hb_feature_data">
                            <div class="hb_feature_icon">
                                <i class="flaticon-quality"></i>
                            </div>
                            <div class="hb_feature_content">
                                <h4>Лучшее качество</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hb_feature_data">
                            <div class="hb_feature_icon">
                                <i class="flaticon-women"></i>
                            </div>
                            <div class="hb_feature_content">
                                <h4>подарки</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hb_add_banner_wrapper">
    <div class="hb_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>“Пусть пища будет твоим лекарством, а лекарство будет твоей пищей”</h3>
            </div>
        </div>
    </div>
</div>


<div class="hb_white_wrapper hb_toppadder80 hb_bottompadder40" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm1-12 col-xs-12">
                <div class=" hb_mainheading hb_bottompadder40">
                    <h2>Магазин</h2>
                    <h3><a href="<?= Url::to(['category/index']) ?>">в наш магазин</a></h3>
                </div>
            </div>

                <?php if( !empty($hits) ): ?>
                <div class="row">
                    <div id="products" class="list-group">
                        <?php foreach($hits as $hit): ?>
                        <?php $mainImg = $hit->getImage();?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                                <div class="hb_product_div">
                                    <div class="hb_product_img">
                                        <?= Html::img($mainImg->getUrl('263x263'), ['alt' => $hit->name,'class' => 'img-responsive'])?>
                                        <div class="product-image-overlay">
                                            <ul class="cart_icons">
                                                <li>
                                                    <a href="<?= Url::to(['/cart/add', 'id' => $hit->id_herbal])?>" data-id="<?= $hit->id_herbal?>" class="add-to-cart" onclick="snackFunc()"><span><i
                                                                    class="flaticon-empty-shopping-cart"></i></span>Добавить в корзину</a>
                                                </li>
                                                <li>
                                                    <a href="<?= Url::to('@web/images/products/') . $hit->img; ?>"
                                                       class="zoom_icon"><span><i
                                                                    class="flaticon-search"></i> </span> Увеличить
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="hb_img_overlay"></div>
                                        <div class="hb_overlay_icon">
                                            <a href="/images/placehold.jpg" class="zoom_icon" style="z-index: 999999999999999;"><i class="flaticon-search-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="hb_product_data">
                                        <h5><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id_herbal]) ?>"><?= $hit->name . ' '. $hit->weight?></a></h5>
                                        <p>₴<?= $hit->price?></p>
                                        <div class="hb_product_detail">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti dicta esse officia quasi voluptate voluptatum. Accusantium adipisci atque dolor mollitia odio omnis placeat, possimus rem, tempora temporibus tenetur veritatis. </p>
                                        </div>
                                        <div class="hb_product_btn">
                                            <a href="cart.html" class="hb_btn"><i class="flaticon-empty-shopping-cart"></i> add to cart </a>
                                            <a href="#" class="hb_btn"><i class="flaticon-favorite-heart-button"></i> add to whishlist </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hb_pagination">
                                <nav aria-label="Page navigation">
                                    <?php
                                    echo LinkPager::widget([
                                        'pagination' => $pages,
                                    ]);
                                    ?>
                                </nav>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


