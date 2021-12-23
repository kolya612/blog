<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

$background = $model->getImage($model::$imageTypes[1]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }

$picture = $model->getImage($model::$imageTypes[2]);
if($picture->id) { $picture = $picture->getUrl(); } else { $picture = false; }

?>
<img src="<?=$background_image?>" width="200px">

<h1><?=$model->place?></h1>
<h2><?=$model->title?> - <?=$model->date?></h2>

<?=$model->content?>

<p>picture</p>
<img src="<?=$picture?>" width="200px">


<h1>Next Events</h1>

<?php
    foreach ($events as $event) {

        $img = $event->getImage($event::$imageTypes[0]);
        if($img->id) { $img = $img->getUrl("180x90"); } else { $img = false; }
?>
            <a href="<?=\yii\helpers\Url::to(['events/' . $event->href])?>">
                <img src="<?=$img?>" width="180px">
            </a>
            <br />
            <?=$event->title?>
            <br />
            <?=$event->date?>
            <br />
            <?=$event->place?>
            <br /><br />
<?php
        }
    die();
?>



