<?php
/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $model->getImage($model::$imageTypes[1]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }

$content = $model->content;
$content = str_replace('../images',$bundle->baseUrl . '/images',$content);

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . \yii\helpers\Url::to(['events/event','href'=>$model->href]);
?>
<section class="go-back">
    <div class="container">
        <a class="back_all" href="#">ALL EVENTS</a>
    </div>
</section>
<section class="main-banner single-event" style="background-image: url(<?=$background_image?>)">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$model->place?></h1>
            <h2 class="subtitle"><strong><?=$model->title?> -</strong> <?=$model->date?></h2>
        </div>
    </div>
</section>
<section class="single-event-content">
    <div class="container">
        <div class="content">
            <?=$content?>
            <div class="social-btn-wrapper">
                <a class="btn btn-border-dark twitter-dark" target="_blank" href="https://twitter.com/intent/tweet?text=<?=$model->title?>&url=<?=$url?>&utm_source=share2">SHARE</a>
                <!--<a class="btn btn-border-dark instagram-dark" href="#">SHARE</a>-->
                <a class="btn btn-border-dark facebook-dark" target="_blank" href="https://www.facebook.com/sharer.php?src=sp&u=<?=$url?>&title=<?=$model->title?>&utm_source=share2">SHARE</a>
            </div>
            <?php if(!empty($events)) { ?>
                <div class="next-events">
                    <h2 class="title">Next Events</h2>
                    <hr>
                    <div class="events-card-group">
                    <?php
                        foreach ($events as $event) {
                            $img = $event->getImage($event::$imageTypes[0]);
                            if($img->id) { $img = $img->getUrl("513x302"); } else { $img = false; } ?>
                            <div class="item_event">
                                <picture><img src="<?=$img?>" alt="<?=$event->title?>"></picture>
                                <div class="white_info">
                                    <h3><?=$event->title?></h3>
                                    <div class="date"><?=$event->date?></div>
                                    <div class="location"><?=$event->place?></div>
                                    <a href="<?=\yii\helpers\Url::to(['events/event','href'=>$event->href])?>" class="more_info">More info</a>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>