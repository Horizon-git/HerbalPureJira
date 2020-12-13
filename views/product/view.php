<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $mainImg = $product->getImage();?>
<div class="hb_white_wrapper hb_toppadder80 hb_bottompadder40">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hb_shop_slider">
                <?= Html::img($mainImg->getUrl('400x'), ['alt' => $product->name ])?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="hb_product_single">
					<h5><?= $product->name?></h5>
					<p>₴<?= $product->price?></p>
					<p><?= $product->content?></p>
                    <p>Вес: <?= $product->weight?></p>
					<div class="hb_quantity"><label>Количество:</label><input id="qty" type="number" value="1" min="1" max="<?= $product->amount?>" class="hb_input" placeholder="Количество"></div>
					<div class="hb_product_btn">
                        <a href="<?= Url::to(['cart/add', 'id' => $product->id_herbal])?>" data-id="<?= $product->id_herbal?>" class="add-to-cart cart hb_btn" onclick="snackFunc()"><i class="flaticon-empty-shopping-cart"></i> Добавить в корзину </a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="hb_related_product">
					<h3>рекомендованные товары</h3>
					<div class="hb_related_product_slider">
						<div class="owl-carousel owl-theme">
                            <?php foreach ($hits as $item): ?>
                                <?php $mainImg2 = $item->getImage();?>
							<div class="item">
								<div class="hb_product_div">
									<div class="hb_product_img">
                                    <?= Html::img($mainImg2->getUrl('263x263'), ['alt' => $item->name])?>
										<div class="product-image-overlay">
                                            <ul class="cart_icons">
                                                <li>
                                                    <a href="<?= Url::to(['cart/add', 'id' => $item->id_herbal])?>" data-id="<?= $item->id_herbal?>" class="cart add-to-cart1" onclick="snackFunc()"><span><i
                                                                    class="flaticon-empty-shopping-cart"></i></span>Добавить в корзину</a>
                                                </li>
                                            </ul>
										</div>
									</div>
									<div class="hb_product_data">
										<h5><a href="<?= Url::to(['product/view', 'id' => $item->id_herbal]) ?>"><?= $item->name ?></a></h5>
										<p>₴<?= $item->price?></p>
									</div>
								</div>
							</div>
                           <?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>