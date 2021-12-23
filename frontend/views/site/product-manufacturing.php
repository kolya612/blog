<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<section class="">

    <div class="main-banner manufacturing">
        <div class="content__container container">
            <div class="main-banner__content">
                <h1 class="title-badge">Product Manufacturing</h1>
                <h2 class="subtitle">We manufacture our products <strong>from start to finish.</strong></h2>
            </div>
        </div>
    </div>
</section>
<section class="expertly part_2">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-4">
                <h2>
                    <span>Nature's </span> Finest
                    <hr/>
                </h2>
                <p>
                    We source only the purest ingredients that nature provides. Driven by a passion for better health
                    for everyone, we have gained access to the cleanest ingredients on the market. We believe in the
                    healing power of nature.
                </p>
            </div>
            <div class="col-12 col-md-6 position-relative">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 position-relative">
                <div class="owl-carousel owl-carousel_3">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_45.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_45.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_53.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_53.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_54.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_54.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_48.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_48.png" alt=""></picture>
                </div>
                <div class="owl-carousel owl-carousel_4">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_49.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_49.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_50.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_50.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_45.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_45.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_51.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_51.png" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_52.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_52.png" alt=""></picture>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rigorous">
    <div class="container">
        <h2>Rigorous <strong>quality assurance</strong><br>
            & compliance</h2>
        <p>
            All of our products are certified by regulatory bodies in the USA. We<br> ensure the best quality products.
        </p>
        <div class="row justify-content-center">
            <div class="col-11 col-md-10">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/Logos_med.svg" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/Logos_med.svg" alt="Logos"/></picture>
            </div>
        </div>
    </div>
</section>
<section class="tot_cont">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6">
                <h2><strong>Total control</strong> over<br>products</h2>
                <p>
                    We control the manufacturing of our products from step one. This ensures our ability to produce the Highest quality products.
                </p>
            </div>
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/Step1.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/Step1.png" alt=""></picture>
            </div>
        </div>
    </div>
</section>

<?=$this->render('../brands/explore-our-brands',['model'=>\backend\modules\brands\models\Brands::getAllActiveBrands()])?>