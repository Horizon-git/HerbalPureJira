<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb_breadcrumbs_wrapper">
    <div class="hb_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hb_pageheading">
                    <h3>Контакты</h3>
                    <ol class="breadcrumb">
                        <li><a href=<?= Url::to(['/'])?>>Главная</a></li>
                        <li class="active">Контакты</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hb_contact_wrapper">
    <div class="hb_contact_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
                    <div class="hb_contact_form_div">
                        <h3>Напишите нам</h3>
                        <div class="hb_contact_form">
                            <div class="form-group">
                                <input type="text" id="ur_name" class="form-control" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" id="ur_mail" class="form-control" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="msg" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="hb_btndiv">
                                <button class="hb_btn" id="send_btn">Отправить</button>
                                <p id="err"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="real_map"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUprso3jwjCMiveixnZPRmJOa8mpUy7rg&callback=initMap" async defer></script>
<script>
    function initMap() {
        var map;
        var bounds = new google.maps.LatLngBounds();
        var markers = [
            ['Харьковский национальный университет радиоэлектроники', 50.014791,36.2263021]
        ];
        var mapOptions = {
            mapTypeId: 'roadmap',
            scrollwheel: false,
            zoom: 6
        };
        var map = new google.maps.Map(document.getElementById('real_map'), mapOptions);
        map.setTilt(45);

        // Info Window Content
        var infoWindowContent = [
            ['<div class="map_info_wrapper">' +
            '<div class="map_img_wrapper">' +
            '<img  src="" alt="">' +
            '<div class="tag_sale">sale</div>' +
            '<div class="tag_price">$24000</div>' +
            '</div>' +
            '<div class="map_detail">' +
            '<div class="map_content">' +
            '<h5><a href="#">Apartments for sale</a></h5>' +
            '<p>Curabitur tortor. Pellentesque nibhat at aenem quamn scelerisque semico saroudr dolora ecens mattis.</p>' +
            '</div>' +
            '<ul>' +
            '<li><i class="flaticon-drawing18"></i>750 SQFT</li>' +
            '<li><i class="flaticon-bathtub3"></i>2 bath</li>' +
            '<li><i class="flaticon-bed40"></i>2 beds</li>' +
            '</ul>' +
            '</div>' +
            '</div>'
            ],
            ['<div class="map_info_wrapper">' +
            '<div class="map_img_wrapper">' +
            '<img  src="" alt="">' +
            '<div class="tag_sale">sale</div>' +
            '<div class="tag_price">$24000</div>' +
            '</div>' +
            '<div class="map_detail">' +
            '<div class="map_content">' +
            '<h5><a href="#">Apartments for sale</a></h5>' +
            '<p>Curabitur tortor. Pellentesque nibhat at aenem quamn scelerisque semico saroudr dolora ecens mattis.</p>' +
            '</div>' +
            '<ul>' +
            '<li><i class="flaticon-drawing18"></i>750 SQFT</li>' +
            '<li><i class="flaticon-bathtub3"></i>2 bath</li>' +
            '<li><i class="flaticon-bed40"></i>2 beds</li>' +
            '</ul>' +
            '</div>' +
            '</div>'
            ]
        ];

        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(),
            marker, i;
        // Loop through our array of markers & place each one on the map
        for (i = 0; i < markers.length; i++) {
            var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
            bounds.extend(position);
            marker = new google.maps.Marker({
                position: position,
                map: map,
                // icon: 'images/maps-mark.png',
                title: markers[i][0]
            });
            // Allow each marker to have an info window
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infoWindow.setContent(infoWindowContent[i][0]);
                    infoWindow.open(map, marker);
                }
            })(marker, i));
            // Automatically center the map fitting all markers on the screen
            map.fitBounds(bounds);
        }

    }
</script>
<!--script end-->
<!--<div class="site-contact">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    --><?php //if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
<!---->
<!--        <div class="alert alert-success">-->
<!--            Thank you for contacting us. We will respond to you as soon as possible.-->
<!--        </div>-->
<!---->
<!--        <p>-->
<!--            Note that if you turn on the Yii debugger, you should be able-->
<!--            to view the mail message on the mail panel of the debugger.-->
<!--            --><?php //if (Yii::$app->mailer->useFileTransport): ?>
<!--                Because the application is in development mode, the email is not sent but saved as-->
<!--                a file under <code>--><?//= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--</code>.-->
<!--                Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->
<!--                application component to be false to enable email sending.-->
<!--            --><?php //endif; ?>
<!--        </p>-->
<!---->
<!--    --><?php //else: ?>
<!---->
<!--        <p>-->
<!--            If you have business inquiries or other questions, please fill out the following form to contact us.-->
<!--            Thank you.-->
<!--        </p>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-5">-->
<!---->
<!--                --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                    --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'email') ?>
<!---->
<!--                    --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                    --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                    ]) ?>
<!---->
<!--                    <div class="form-group">-->
<!--                        --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                    </div>-->
<!---->
<!--                --><?php //ActiveForm::end(); ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    --><?php //endif; ?>
<!--</div>-->
