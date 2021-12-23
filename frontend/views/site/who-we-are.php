<?php
    $bundle=\frontend\assets\AppAsset::register($this);

?>


<section class="">

    <div class="main-banner who_we">
        <div class="content__container container">
            <div class="main-banner__content">
                <h1 class="title-badge">Who We Are</h1>
                <h2 class="subtitle">Our passionate team empowers people to <strong>live their healthiest lives</strong>
                    with superior products.</h2>
            </div>
        </div>
    </div>

</section>
<section class="block_tabs_who">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="nav flex-row align-content-md-end align-content-center justify-content-center h-100 flex-md-column nav-pills me-3"
                     id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">MISSION
                    </button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">VISION
                    </button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">VALUES
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-7">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="block_pos_who">
                            We are driven by our mission to <span>Empower people to live healthy</span> lives.
                        </div>
                        <picture><source srcset="<?=$bundle->baseUrl?>/images/Right.webp" type="image/webp"><img class="d-block w-100" src="<?=$bundle->baseUrl?>/images/Right.png" alt=""></picture>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                         aria-labelledby="v-pills-profile-tab">
                        <div class="block_pos_who">
                            Our vision focuses on <span>building winning brands</span> that improve people’s lives
                            worldwide.
                        </div>
                        <picture><source srcset="<?=$bundle->baseUrl?>/images/Right1.webp" type="image/webp"><img class="d-block w-100" src="<?=$bundle->baseUrl?>/images/Right1.png" alt=""></picture>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                         aria-labelledby="v-pills-messages-tab">
                        <div class="block_pos_who">
                            We demonstrate our commitment to <span>uplifting people and helping them</span> achieve
                            their limitless potential.
                        </div>
                        <picture><source srcset="<?=$bundle->baseUrl?>/images/Right2.webp" type="image/webp"><img class="d-block w-100" src="<?=$bundle->baseUrl?>/images/Right2.png" alt=""></picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="face_success">
    <div class="container">
        <h2><span>We are the face of success,</span> always<br> exceeding industry standards.</h2>
        <p>
            Experienced, authentic leaders and proven experts form our executive<br> leadership team driven by their
            passion for creating a healthier world.
        </p>
        <div class="row">
            <div class="col-4 col-md-3">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/face_success_1.webp" type="image/webp"><img class="w-100 d-block mb-4" src="<?=$bundle->baseUrl?>/images/face_success_1.jpg" alt=""/></picture>
                <picture><source srcset="<?=$bundle->baseUrl?>/images/face_success_2.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/face_success_2.jpg" alt=""/></picture>
            </div>
            <div class="col-8 col-md-6">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/face_success_3.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/face_success_3.jpg" alt=""/></picture>
            </div>
            <div class="col-12 col-md-3 d-none d-md-block">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/face_success_4.webp" type="image/webp"><img class="w-100 d-block mb-4" src="<?=$bundle->baseUrl?>/images/face_success_4.jpg" alt=""/></picture>
                <picture><source srcset="<?=$bundle->baseUrl?>/images/face_success_5.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/face_success_5.jpg" alt=""/></picture>
            </div>
        </div>
        <div class="text-center">
            <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'leadership'])?>" class="btn btn-primary ">MEET OUR CEO</a>
        </div>
    </div>
</section>
<section class="expertly">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-5">
                <h2>
                    <span>Expertly crafted</span><br> brands
                </h2>
                <p>
                    Our multidisciplinary creative team<br> has a proven record developing<br> successful, memorable
                    brands.
                </p>
                <a href="<?=\yii\helpers\Url::to(['brands/index'])?>" class="btn btn-border-dark ">EXPLORE ALL BRANDS</a>
            </div>
            <div class="col-12 col-md-6 position-relative">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 position-relative">
                <div class="owl-carousel owl-carousel_3">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_11.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_11.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_12.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_12.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_13.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_13.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_14.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_14.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_15.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_15.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_16.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_16.jpg" alt=""></picture>
                </div>
                <div class="owl-carousel owl-carousel_4">
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_32.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_32.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_34.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_34.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_36.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_36.jpg" alt=""></picture>
                    <picture><source srcset="<?=$bundle->baseUrl?>/images/Frame_38.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/Frame_38.jpg" alt=""></picture>
                </div>
            </div>
        </div>
    </div>
</section>
