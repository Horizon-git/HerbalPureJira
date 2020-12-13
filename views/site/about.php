<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb_breadcrumbs_wrapper">
    <div class="hb_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hb_pageheading">
                    <h3>О нас</h3>
                    <ol class="breadcrumb">
                        <li><a href=<?= Url::to(['/'])?>>Главная</a></li>
                        <li class="active">О нас</li>
                    </ol>
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
                    <h2>Herbal Pure</h2>
                    <h3>Кто мы</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hb_about_data">
                    <?= Html::img("@web/images/herb_banner3.jpg", ['alt' => 'leaf','class' => 'img-responsive','style' => 'width:1140px;height:386px;'])?>
                    <div class="hb_about_overlay">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="hb_about_overlay_inner">
                                    <h4>remedies for all problems</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum imperdiet eros, vitae placerat arcu suscipit non. Sed fermentum gravida dui eu suscipit. Ut mollis mi et nunc interdum, in finibus risus congue. Mauris sed quam mollis, maximus purus a, gravida nibh. Curabitur congue libero eros, non maximus lacus suscipit.</p>
                                    <p> Nulla feugiat, risus sit amet consectetur porttitor, nibh quam lobortis odio, id lobortis enim lorem sit amet lectus. Nam aliquet ante sit amet mattis lobortis. Sed accumsan eros eget turpis fermentum, ac consequat mi bibendum. Integer cursus odio a accumsan hendrerit. Mauris sed quam mollis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hb_gray_wrapper hb_toppadder80 hb_bottompadder40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm1-12 col-xs-12">
                <div class=" hb_mainheading hb_bottompadder40">
                    <h2>Особенности</h2>
                    <h3>Почему Herbal Pure?</h3>
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
                                <h4>100 % органика</h4>
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
                                <h4>Выбор людей</h4>
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
                                <h4>лучшее качетво</h4>
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