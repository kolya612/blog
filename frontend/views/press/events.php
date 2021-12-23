<?php

use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

?>
    <h1>Events</h1>
    <h2>Upcoming Events</h2>
<?php
foreach ($model as $event) {
    $listing_img = $event->getImage($event::$imageTypes[0]);
    if($listing_img->id) {
        $listing_img = $listing_img->getUrl();
    } else {
        $listing_img = false;
    }
    ?>
        <p><?=$event->title?></p>
        <p><?=$event->date?></p>
        <p><?=$event->place?></p>
        <a href="<?=\yii\helpers\Url::to(['events/' . $event->href])?>"><picture><img src="<?=$listing_img?>" width="200px"></picture></a>
        <br /><br />
<?php
}
?>

<br />

<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);

die();
?>


