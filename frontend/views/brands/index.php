<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $page->getImage($page::$imageTypes[0]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }

?>
<section class="" style="background-image: url('<?=$background_image?>')">
    <div class="main-banner brands">
        <div class="content__container container">
            <div class="main-banner__content">
                <h1 class="title-badge"><?=$page->title?></h1>
                <h2 class="subtitle"><?=$page->sub_title?></h2>
            </div>
        </div>
    </div>
</section>
<?php
    $counter = 0;
    foreach ($model as $num=>$brand) {
        $logo = $brand->getImage($brand::$imageTypes[3]);
        $background = $brand->getImage($brand::$imageTypes[2]);
        if($logo->id) {
            $logo_image = $logo->getUrl();
            $background_image = $background->getUrl();
        } else {
            $logo_image = false;
            $background_image = false;
        }
 ?>
    <section class="brands_item part_<?=$num+1?>" style="background-image: url(<?=$background_image?>)">
        <div class="container h-100">
            <div class="row h-100 justify-content-center">
                <div class="short-description">
                    <picture><source srcset="<?=$logo_image?>" type="image/webp"><img src="<?=$logo_image?>" alt="" /></picture>
                    <?=$brand->description?>
                    <a href="<?=\yii\helpers\Url::to(['brands/brand','href'=>$brand->href])?>" class="btn btn-border-dark transparent">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>
<?php
    }
?>

<?=$this->render('explore-our-brands',['model'=>$brands])?>