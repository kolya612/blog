<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $model->getImage($model::$imageTypes[1]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }

$content = $model->content;
$content = str_replace('../images',$bundle->baseUrl . '/images',$content);

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . \yii\helpers\Url::to(['press/news','href'=>$model->href]);
?>
<section class="go-back">
    <div class="container">
        <a class="back_all" href="<?=\yii\helpers\Url::to(['press/index'])?>">ALL PRESS & MEDIA</a>
    </div>
</section>

<section class="main-banner company" style="background-image: url(<?=$background_image?>)">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$model::TAG[$model->tag]?></h1>
            <h2 class="subtitle"><strong><?=$model->title?></strong></h2>
        </div>
    </div>
</section>

<section class="company-content">
    <div class="container">
        <div class="content-wrapper">
            <div class="main-content">
                <?=$content?>
                <div class="social-btn-wrapper">
                    <a class="btn btn-border-dark twitter-dark" target="_blank" href="https://twitter.com/intent/tweet?text=<?=$model->title?>&url=<?=$url?>&utm_source=share2">SHARE</a>
                    <!--<a class="btn btn-border-dark instagram-dark" href="#">SHARE</a>-->
                    <a class="btn btn-border-dark facebook-dark" target="_blank" href="https://www.facebook.com/sharer.php?src=sp&u=<?=$url?>&title=<?=$model->title?>&utm_source=share2">SHARE</a>
                </div>
            </div>
            <?php if(!empty($next_news)){ ?>
            <div class="other-articles">
                <h3 class="title">Other articles you might be interested in</h3>
                <?php foreach ($next_news as $news) {
                    $news_img = $news->getImage($news::$imageTypes[0]);
                    if($news_img->id) {
                        $news_img = $news_img->getUrl();
                    } else {
                        $news_img = false;
                    }
                ?>
                    <div class="news sm">
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
            <?php } ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>