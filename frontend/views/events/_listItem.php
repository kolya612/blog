<?php

?>
<a href="<?=\yii\helpers\Url::to(['events/event','href'=>$model->href])?>">
    <picture><img src="<?=$model->getImage(\backend\modules\events\models\Events::$imageTypes[0])->getUrl('513x302')?>" alt="<?=$model->title?>"></picture>
</a>
<div class="white_info">
    <a href="<?=\yii\helpers\Url::to(['events/event','href'=>$model->href])?>"><h3><?=$model->title?></h3></a>
    <div class="date"><?=$model->date?></div>
    <div class="location"><?=$model->place?></div>
    <a href="<?=\yii\helpers\Url::to(['events/event','href'=>$model->href])?>" class="more_info">More info</a>
</div>