<?php

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\LinkPager;


?>
        <?php if (!empty($products)): ?>
            <div id="products" class="list-group">
                <?php foreach ($products as $product): ?>
                    <?php if($product->amount != 0): ?>
                        <?php $Img = $product->getImage();?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">

                            <div class="hb_product_div">
                                <div class="hb_product_img">
                                    <?= Html::img($Img->getUrl('263x263'), ['alt' => $product->name, 'class' => 'img-responsive']) ?>
                                    <div class="product-image-overlay">
                                        <ul class="cart_icons">
                                            <li>
                                                <a href="<?= Url::to(['/cart/add', 'id' => $product->id_herbal])?>" data-id="<?= $product->id_herbal?>" class="add-to-cart" onclick="snackFunc()"><span><i
                                                                class="flaticon-empty-shopping-cart"></i></span>Добавить в корзину</a>
                                            </li>
                                            <li>
                                                <a href="<?= Url::to('@web/images/products/') . $product->img; ?>"
                                                   class="zoom_icon"><span><i
                                                                class="flaticon-search"></i> </span> Увеличить
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hb_img_overlay"></div>
                                    <div class="hb_overlay_icon">
                                        <a href="/images/placehold.jpg" class="zoom_icon"><i
                                                    class="flaticon-search-2"></i></a>
                                    </div>
                                </div>
                                <div class="hb_product_data">
                                    <h5><a href="<?= Url::to(['product/view', 'id' => $product->id_herbal]) ?>"><?= $product->name. ' '.$product->weight?></a></h5>
                                    <p>₴<?= $product->price ?></p>
                                    <div class="hb_product_detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                                            deleniti dicta esse officia quasi voluptate voluptatum. Accusantium
                                            adipisci atque dolor mollitia odio omnis placeat, possimus rem,
                                            tempora temporibus tenetur veritatis. </p>
                                    </div>
                                    <div class="hb_product_btn">
                                        <a href="cart.html" class="hb_btn"><i
                                                    class="flaticon-empty-shopping-cart"></i> Добавить в корзину </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
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
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="margin-left: 15px;"><p>В данной категории пока нет товаров...</p></div>
                </div>
            </div>
        <?php endif; ?>
