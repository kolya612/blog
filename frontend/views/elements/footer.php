<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<footer class="footer">
    <div class="container">
        <div class="main-content">
            <div class="footer__logo-wrapper">
                <a class="logo link" href="<?=\yii\helpers\Url::to(['site/index'])?>">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/limitless-logo.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/limitless-logo.svg" alt="limitless"></picture>
                </a>
                <a class="instagram link" href="<?=\common\models\Config::getParameter('instagram', false)?>">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/limitless__insta-logo.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/limitless__insta-logo.svg" alt="instagram"></picture>
                </a>
            </div>

            <div class="footer__link-wrapper">
                <ul class="link-group">
                    <li class="item">
                        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'what-we-do'])?>" class="title">What we do</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'brands-development'])?>">Brand development</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'product-manufacturing'])?>">Product manufacturing</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'consumer-marketing'])?>">Consumer market entry</a>
                    </li>
                </ul>

<!--                <ul class="link-group">-->
<!--                    <li class="item">-->
<!--                        <p class="title">Industries</p>-->
<!--                    </li>-->
<!--                    <li class="item">-->
<!--                        <a class="link" href="#">CBD products</a>-->
<!--                    </li>-->
<!--                    <li class="item">-->
<!--                        <a class="link" href="#">Dietary supplements</a>-->
<!--                    </li>-->
<!--                    <li class="item">-->
<!--                        <a class="link" href="#">Skin Care</a>-->
<!--                    </li>-->
<!--                </ul>-->

                <ul class="link-group">
                    <li class="item">
                        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'who-we-are'])?>" class="title">Who we are</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'publishers-and-advertisers'])?>">Joint ventures</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'leadership'])?>">Leadership</a>
                    </li>
                </ul>

                <ul class="link-group">
                    <li class="item">
                        <p class="title">Support</p>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['contact/index'])?>">Contact us</a>
                    </li>
                    <li class="item">
                        <a class="link" href="<?=\yii\helpers\Url::to(['site/faq'])?>">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="copyright-block">
            <p class="text"><?=\common\models\Config::getParameter('copyright',false)?></p>

            <ul class="link-group">
                <li class="item">
                    <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'privacy-policy'])?>">Privacy Policy</a>
                </li>

                <li class="item">
                    <a class="link" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'terms-and-conditions'])?>">Terms of use</a>
                </li>

            </ul>
        </div>
    </div>
</footer>