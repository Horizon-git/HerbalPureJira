<?php use yii\helpers\Html;
?>
<div id="cart">
<?php if(!empty($session['cart'])): ?>

        <div class="hb_white_wrapper hb_toppadder80 hb_bottompadder40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="woocommerce">
                            <table class="shop_table shop_table_responsive cart">
                                <tr>
                                    <th>Товар</th>
                                    <th>Название</th>
                                    <th>Цена</th>
                                    <th>Кол-во</th>
                                    <th>Всего</th>
                                    <th>Удалить</th>
                                </tr>
                                <?php foreach($session['cart'] as $id => $item):?>

                                    <tr>
                                        <td>
                                            <? if (($item['img'] == 'no-image.png')): ?>
                                            <span><?= Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 70]) ?></span>
                                            <? else: ?>
                                            <span><?= Html::img($item['img'], ['alt' => $item['name'], 'height' => 70]) ?></span>
                                            <? endif; ?>
                                        </td>
                                        <td>
                                            <p><a href="shop_single.html"><?= $item['name']?></a></p>
                                        </td>
                                        <td>
                                            <p><?= $item['price']?></p>
                                        </td>
                                        <td>
                                            <p><?= $item['qty']?></p>
                                            <!--                                <div class="hb_quantity">-->
                                            <!--                                    <input type="number" min="0" class="hb_input" placeholder="Quantity">-->
                                            <!--                                </div>-->
                                        </td>
                                        <td>
                                            <p><?= $item['price'] * $item['qty']?></p>
                                        </td>
                                        <td>
                                            <span data-id="<?= $id?>" class="del-item hb_closebtn"><i class="fa fa-times"></i></span>
                                        </td>
                                    </tr>
                                <?php endforeach?>
                            </table>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 pull-right">
                                <div class="cart_totals">
                                    <div class="cart_total_inner">
                                        <h2>Сумма корзины</h2>
                                        <table class="shop_table shop_table_responsive">
                                            <tr class="cart-subtotal">
                                                <th>Товаров:</th>
                                                <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= $session['cart.qty']?></span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Итого:</th>
                                                <td data-title="Total"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span><?= $session['cart.sum']?></span></td>
                                            </tr>
                                        </table>
                                        <div class="wc-proceed-to-checkout">
                                            <a href="checkout.html" class="checkout-button hb_btn">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php else: ?>
    <div style="padding:100px 0 200px; text-align: center;">
        <i class="fa fa-5x flaticon-empty-shopping-cart scart"></i>
        <h1>Ваша корзина пуста</h1>
        <p><a href="/category/index">Добавить Товары в Корзину</a></p>
    </div>
<?php endif;?>
    </div>


