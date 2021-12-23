<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $model->getImage($model::$imageTypes[4]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }


$picture1 = $model->getImage($model::$imageTypes[5]);
$picture2 = $model->getImage($model::$imageTypes[6]);
$picture3 = $model->getImage($model::$imageTypes[7]);
if($picture1->id) { $picture1 = $picture1->getUrl(); } else { $picture1 = false; }
if($picture2->id) { $picture2 = $picture2->getUrl(); } else { $picture2 = false; }
if($picture3->id) { $picture3 = $picture3->getUrl(); } else { $picture3 = false; }
?>
<img src="<?=$background_image?>" width="200px">
<h1><?=$model->brand_name?></h1>
<h1><?=$model->title?></h1>
<?=$model->description?>

<p>3 picture</p>
<img src="<?=$picture1?>" width="200px">
<img src="<?=$picture2?>" width="200px">
<img src="<?=$picture3?>" width="200px">

<h1>Explore Our Brands</h1>
<?php

foreach ($brands as $brand) {
    $logo = $brand->getImage($brand::$imageTypes[0]);
    if($logo->id) { $logo_image = $logo->getUrl(); } else { $logo_image = false; }
    ?>
    <div class="col-12 col-md-4">
        <a href="/brands/<?=$brand->href?>"><picture><img class="w-100 d-block mb-4"  src="<?=$logo_image?>" alt=""></picture></a>
    </div>
    <?php
}
?>



