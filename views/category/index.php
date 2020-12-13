
<?php


/* @var $this yii\web\View */

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;


?>
<div class="hb_breadcrumbs_wrapper">
    <div class="hb_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hb_pageheading">
                    <h3>Магазин</h3>
                    <ol class="breadcrumb">
                        <li><a href=<?= Url::to(['/'])?>>Главная</a></li>
                        <li class="active">Магазин</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hb_white_wrapper hb_toppadder80 hb_bottompadder40">
    <div class="container">

        <div class="hb_shoppage">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hb_shop_view">
                    <ul>
                        <li>просмотр</li>
                        <li><a href="#" id="list"><i class="flaticon-signs"></i></a></li>
                        <li class="active"><a href="#" id="grid"><i class="flaticon-squares"></i></a></li>
                    </ul>
                </div>
            </div>

            <?php $request = Yii::$app->request; ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="hb_showing_product">
                    <p>Результатов: <?=$pages->totalCount?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right">
            </div>
        </div>
        <div class="hb_related_product">
            <h3>Избранные товары</h3>
        </div>
        <div class="row" >
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
                <div class="row" id="products-filter">
                    <?php if( !empty($hits) ): ?>
                    <div id="products" class="list-group">
                        <?php foreach($hits as $hit): ?>
                        <?php if($hit->amount != 0): ?>
                        <?php $Img = $hit->getImage()?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                            <div class="hb_product_div">
                                <div class="hb_product_img">
                                    <?= Html::img($Img->getUrl('263x263'), ['alt' => $hit->name, 'class' => 'img-responsive']) ?>                                    <div class="product-image-overlay">
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
                                        <a href="<?= Url::to('@web/images/products/') . $hit->img; ?>" class="zoom_icon"><i class="flaticon-search-2"></i></a>
                                    </div>
                                </div>
                                <div class="hb_product_data">
                                    <h5><a href="<?= Url::to(['product/view', 'id' => $hit->id_herbal]) ?>"><?= $hit->name. ' '. $hit->weight;?></a></h5>
                                    <p>₴<?= $hit->price?></p>
                                    <div class="hb_product_detail">
                                        <p><?=$hit->content;?> </p>
                                    </div>
                                    <div class="hb_product_btn">
                                        <a href="<?= Url::to(['/cart/add', 'id' => $hit->id_herbal])?>" data-id="<?= $hit->id_herbal?> " class="hb_btn add-to-cart" onclick="snackFunc()"><i class="flaticon-empty-shopping-cart"></i> Добавить в корзину </a></div>
                                </div>
                            </div>
                        </div>
                            <?php endif; ?>
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
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="hb_sidebar">
                    <div class="widget widget_product_search">
                        <form class="hb_product_search" action="<?= Url::to(['category/search'])?>">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Поиск.." name="q">
                            </div>
                            <button class="hb_btn" type="submit"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_catalog">
                        <h3 class="widget-title">Категории</h3>
                        <ul class="catalog1">
                            <?= MenuWidget::widget(['tpl' => 'menu'])?>
                        </ul>
                    </div>

                    <div class="widget widget_rangeslider">
                        <h3 class="widget-title">Фильтр по цене</h3>
                        <div id="slider-range"></div>
                        <div class="hb_range">
                            <label for="amount">Диапазон цен:</label>
                            <input type="text" id="amount" readonly>
                        </div>
                        <div class="hb_filter">
                            <a href="#">Фильтровать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    let min_price = parseInt('<?=$min_price;?>');
    let max_price = parseInt('<?=$max_price;?>');
</script>