<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

?>

<section class="we_exist">
    <div class="container we_exist__content">
        <h1 class="main_text">
            REINVENT YOURSELF
        </h1>
        <a href="<?=\yii\helpers\Url::to(['/brands-development'])?>" class="btn">LEARN MORE</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>

<section class="we_build">
    <div class="container we_exist__content">
        <h2 class="main_text">
            We build <span>brands</span> <br>And a whole lot more.
        </h2>
        <a href="<?=\yii\helpers\Url::to(['brands/index'])?>" class="btn btn-primary ">EXPLORE OUR BRANDS</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>

<section class="lead">
    <div class="container we_exist__content text-sm-end text-start">
        <h2>
            <span>Led by a laser-focused<br> team</span> with unequaled<br> know-how.
        </h2>
        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'leadership'])?>" class="btn btn-warning ">WHO WE ARE</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>
<section class="delivering">
    <div class="container we_exist__content">
        <h2>
            Delivering <span>value and<br> innovation</span> for evolving<br> consumer needs.
        </h2>
        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'who-we-are'])?>" class="btn btn-warning ">WHO WE ARE</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>
<section class="events">
    <div class="container">
        <?php if(!empty($events)) { ?>
            <h2 class="main_text">
                Recent Events
            </h2>
            <div class="owl-carousel owl-carousel_1">
                <?php foreach($events as $event) {
                    $img = $event->getImage($event::$imageTypes[0]);
                    if($img->id) { $img = $img->getUrl("416x245"); } else { $img = false; } ?>
                    <div class="item_event">
                        <picture><img src="<?=$img?>" alt=""></picture>
                        <div class="white_info">
                            <h3><?=$event->title?></h3>
                            <div class="date"><?=$event->date?></div>
                            <div class="location"><?=$event->place?></div>
                            <a href="<?=\yii\helpers\Url::to(['events/event','href'=>$event->href])?>" class="more_info">More info</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="<?=\yii\helpers\Url::to(['events/index'])?>" class="btn btn-primary btn-border-dark">EXPLORE ALL EVENTS</a>
        <?php }  ?>

        <?php if(!empty($press)) { ?>
            <h2 class="main_text">
                Latest News
            </h2>
            <div class="owl-carousel owl-carousel_2">
                <?php foreach($press as $news) {
                    $news_img = $news->getImage($news::$imageTypes[0]);
                    if($news_img->id) {
                        $news_img = $news_img->getUrl();
                    } else {
                        $news_img = false;
                    }
                ?>
                <div class="news">
                    <picture><img src="<?=$news_img?>" alt=""></picture>
                    <div class="info_news">
                        <div class="company"><?=$news::TAG[$news->tag]?></div>
                        <h4><?=$news->title?></h4>
                        <p><?=$news->getLimitContent()?></p>
                        <a href="<?=\yii\helpers\Url::to(['press/news','href'=>$news->href])?>" class="btn btn-primary transparent">READ MORE</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="text-center">
                <a href="<?=\yii\helpers\Url::to(['press/index'])?>" class="btn btn-primary btn-border-dark explor">EXPLORE ALL NEWS</a>
            </div>
        <?php }  ?>
    </div>
</section>
<section class="lets">
    <div class="container text-center">
        <h2 class="main_text">
            Let’s innovate <span>together.</span>
        </h2>
        <a href="<?=\yii\helpers\Url::to(['contact/index'])?>" class="btn">CONTACT US</a>
    </div>
</section>
