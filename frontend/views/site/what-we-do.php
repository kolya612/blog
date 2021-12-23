<?php
    $bundle=\frontend\assets\AppAsset::register($this);

?>

<section class="">

    <div class="main-banner who_we_do">
        <div class="content__container container">
            <div class="main-banner__content">
                <h1 class="title-badge">What we do</h1>
                <h2 class="subtitle">We lead the industry as one of the <strong>best brands in the world.</strong></h2>
            </div>
        </div>
    </div>
</section>
<section class="brand_dev">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="for_img_wh">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Whaе_img_2.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Whaе_img_2.png" alt="" /></picture>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex align-content-center flex-wrap">
                <h2>
                    Brand<br> Development
                </h2>
                <p>
                    At the forefront of global trends, we create successful brands that provide solutions to consumer’s health challenges and needs.
                </p>
                <p>
                    Our proactive marketing team uses innovative concepts and criteria that build our brands into lightning-speed commercial success.
                </p>
                <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'brands-development'])?>" class="btn">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>
<section class="brand_dev red">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 col-md-5 d-flex align-content-center flex-wrap">
                <h2>
                    Product<br>
                    Manufacturing
                </h2>
                <p>
                    Our world-renowned expertise makes it possible to ensure the highest quality and cost-efficient products across diverse categories.
                </p>
                <p>
                    As a vertically integrated manufacturing company, we understand how to optimize the whole supply chain for efficiency.
                </p>
                <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'product-manufacturing'])?>" class="btn btn-primary">LEARN MORE</a>
            </div>
            <div class="col-12 col-md-6">
                <div class="for_img_wh">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Whaе_img_1.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Whaе_img_1.png" alt="" /></picture>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brand_dev red black">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="for_img_wh">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Whaе_img.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Whaе_img.png" alt="" /></picture>
                </div>
            </div>
            <div class="col-12 col-md-5 d-flex align-content-center flex-wrap">
                <h2>
                    Consumer<br>
                    Marketing
                </h2>
                <p>
                    Our products and services match and surpass customer challenges with concrete, transparent solutions.
                </p>
                <p>
                    Tapping into our vast network of health and fitness experts, we create cutting-edge, affordable products to assist them on their journey to better health.
                </p>
                <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'consumer-marketing'])?>" class="btn">LEARN MORE</a>
            </div>
        </div>
    </div>
</section>

<?=$this->render('../brands/explore-our-brands',['model'=>\backend\modules\brands\models\Brands::getAllActiveBrands()])?>

