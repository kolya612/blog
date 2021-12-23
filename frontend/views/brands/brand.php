<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $model->getImage($model::$imageTypes[4]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }


//$picture1 = $model->getImage($model::$imageTypes[5]);
//$picture2 = $model->getImage($model::$imageTypes[6]);
//$picture3 = $model->getImage($model::$imageTypes[7]);
//if($picture1->id) { $picture1 = $picture1->getUrl(); } else { $picture1 = false; }
//if($picture2->id) { $picture2 = $picture2->getUrl(); } else { $picture2 = false; }
//if($picture3->id) { $picture3 = $picture3->getUrl(); } else { $picture3 = false; }
?>

<section class="go-back">
    <div class="container">
        <a class="back_all" href="<?=\yii\helpers\Url::to(['brands/index'])?>">ALL BRANDS</a>
    </div>
</section>

<section class="main-banner" style="background-image: url('<?=$background_image?>')">
    <div class="content__container line-bottom container ">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$model->brand_name?></h1>
        </div>
    </div>
</section>


<section class="brand-description">
    <div class="container">
        <div class="brand-description__content">
            <h2 class="title"><?=$model->title?></h2>
            <div class="description">
                <div class="text-wrapper">
                    <?=$model->content?>
                    <a class="btn btn-border-dark" href="<?=$model->url?>" target="_blank">VISIT WEBSITE</a>
                </div>

                <div class="picture-wrapper">
                    <? foreach ($model->getImages($model::$imageTypes[5]) as $image){ ?>
                            <picture><!--source srcset="" type="image/webp"--><img src="<?=$image->getUrl()?>" alt="#"></picture>
                    <? } ?>
                </div>
            </div>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>



<!--<img src="--><?//=$background_image?><!--" width="200px">-->
<!--<h1>--><?//=$model->brand_name?><!--</h1>-->
<!--<h1>--><?//=$model->title?><!--</h1>-->
<?//=$model->description?>
<!---->
<!--<p>3 picture</p>-->
<!--<img src="--><?//=$picture1?><!--" width="200px">-->
<!--<img src="--><?//=$picture2?><!--" width="200px">-->
<!--<img src="--><?//=$picture3?><!--" width="200px">-->

<?=$this->render('explore-our-brands',['model'=>\backend\modules\brands\models\Brands::getAllActiveBrands()])?>



