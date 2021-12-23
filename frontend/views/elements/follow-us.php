<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>


<section class="instagram-block">

    <div class="instagram-block__header">
        <div class="header-content">
            <div class="container">
                <h1 class="title"><strong>Follow us</strong> & be part of our success</h1>
                <a class="btn btn-primary transparent instagram-btn" href="<?=\common\models\Config::getParameter('instagram',false)?>">@LIMITLESSX</a>
            </div>
        </div>
    </div>

    <div class="instagram-block__content-wrapper">
        <div class="owl-carousel instagram-block__content">
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_1.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_1.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_2.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_2.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_3.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_3.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_4.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_4.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_5.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_5.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_6.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_6.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_7.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_7.png" alt="#"></picture></div>
            <div class="img-box"><picture><source srcset="<?=$bundle->baseUrl?>/images/insta-img_8.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/insta-img_8.png" alt="#"></picture></div>
        </div>
    </div>

</section>
