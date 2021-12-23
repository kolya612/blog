<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<section class="trusted_partner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10">
                <h1 class="main_text">
                    <span>We're your trusted partner</span><br> in affiliate marketing at all<br> times.
                </h1>
                <a href="<?=\yii\helpers\Url::to(['contact/advertiser'])?>" class="btn mr-5 d-none d-sm-inline-block">Become an Advertisers</a>
                <a href="<?=\yii\helpers\Url::to(['contact/publisher'])?>" class="btn btn-success d-none d-sm-inline-block">Become a Publisher</a>
            </div>
        </div>
    </div>
</section>
<section class="advertisers">
    <div class="container">
        <h2>Advertisers</h2>
        <p>
            <span>Get high-quality leads</span> and grow your customer<br> database
        </p>
        <div class="row">
            <div class="col-sm-6 col-12 d-md-flex d-block align-content-center flex-wrap">
                <h3>
                    We Work With<br>
                    the Following Verticals
                </h3>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Vector.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Vector.svg" alt=""></picture>
                    Nutraceuticals
                </div>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Frame.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Frame.svg" alt=""></picture>
                    Sweepstakes
                </div>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Vector1.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Vector1.svg" alt=""></picture>
                    Credit Card Submit
                </div>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Frame1.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Frame1.svg" alt=""></picture>
                    Cash-on-delivery
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/img_ad.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/img_ad.png" alt="#"></picture>
            </div>
        </div>
    </div>
</section>
<section class="traffic">
    <div class="container">
        <h2>Diversified Traffic Sources</h2>
        <div class="row justify-content-start">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet.png" alt=""></picture>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet-1.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet-1.png" alt=""></picture>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet-2.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet-2.png" alt=""></picture>
            </div>
        </div>
    </div>
</section>
<section class="account">
    <div class="container text-center">
        <div class="aceholder">
            <picture><source srcset="<?=$bundle->baseUrl?>/images/Imageplaceholder.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/Imageplaceholder.png" alt=""></picture>
            <div class="text_position">
                <h3>Account<br> Management Team</h3>
                <p>
                    24-hour coverage to answer questions and<br> resolve issues on demand.
                </p>
            </div>
        </div>
        <a href="<?=\yii\helpers\Url::to(['contact/advertiser'])?>" class="btn">Become an Advertisers</a>
    </div>
</section>
<section class="advertisers white">
    <div class="container">
        <h2>Publishers</h2>
        <p>
            Become a publisher and maximize your earnings.
        </p>
        <div class="publ_block">
            <picture><source srcset="<?=$bundle->baseUrl?>/images/img_p.webp" type="image/webp"><img src="<?=$bundle->baseUrl?>/images/img_p.png" alt=""></picture>
            <div class="publ_block_position">
                <h3>
                    Top Campaigns from<br> Hundreds of Direct<br> Advertisers
                </h3>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Vector11.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Vector11.svg" alt=""></picture>
                    New and exclusive offers uploaded weekly
                </div>
                <div class="hashtager">
                    <picture><source srcset="<?=$bundle->baseUrl?>/assets/Vector11.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Vector11.svg" alt=""></picture>
                    Higher EPC and weekly payouts across top performing campaigns
                </div>
            </div>
        </div>
    </div>
</section>
<section class="traffic part_2">
    <div class="container">
        <h2>Local Account Support</h2>
        <div class="row justify-content-start">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet-3.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet-3.png" alt=""></picture>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet-4.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet-4.png" alt=""></picture>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12 col-md-5">
                <picture><source srcset="<?=$bundle->baseUrl?>/images/bullet-5.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/bullet-5.png" alt=""></picture>
            </div>
        </div>
    </div>
</section>
<section class="account white">
    <div class="container text-center">
        <div class="aceholder">
            <picture><source srcset="<?=$bundle->baseUrl?>/images/Img_23.webp" type="image/webp"><img class="w-100 d-block" src="<?=$bundle->baseUrl?>/images/Img_23.png" alt=""></picture>
            <div class="text_position">
                <h3>Weekly payment</h3>
                <p>
                    Keeping track of cash flow is critical for your<br> business
                </p>
            </div>
        </div>
        <a href="<?=\yii\helpers\Url::to(['contact/advertiser'])?>" class="btn">Become an Advertisers</a>
    </div>
</section>
