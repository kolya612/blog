<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=\yii\helpers\Url::to(['site/index'])?>">
                <picture><source srcset="<?=$bundle->baseUrl?>/assets/Logo.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/Logo.svg" alt="logo"></picture>
            </a>
            <button class="navbar-toggler" type="button" onclick="burgerMenu(this)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 w-100 justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'who-we-are'])?>" id="navbarDropdown" >
                            Who We Are
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'publishers-and-advertisers'])?>">Joint Ventures</a></li>
                            <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'leadership'])?>">Leadership</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'what-we-do'])?>" id="navbarDropdown_2" >
                            What We Do
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                            <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'brands-development'])?>">Brand Development</a></li>
                            <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'product-manufacturing'])?>">Product Manufacturing</a></li>
                            <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'consumer-marketing'])?>">Consumer Market Entry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?=\yii\helpers\Url::to(['brands/index'])?>" id="navbarDropdown_3">
                            Our Brands
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                            <? foreach (\backend\modules\brands\models\Brands::getMainBrands() as $brand){ ?>
                                <li><a class="dropdown-item" href="<?=\yii\helpers\Url::to(['brands/brand','href'=>$brand->href])?>"><?=$brand->brand_name?></a></li>
                            <? } ?>
                            <li><a class="dropdown-item red" href="<?=\yii\helpers\Url::to(['brands/index'])?>">Other Brands <i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['press/index'])?>">Press & Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['events/index'])?>">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=\yii\helpers\Url::to(['contact/index'])?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
