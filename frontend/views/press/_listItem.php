<?php

?>
<div class="news">
    <a href="<?=\yii\helpers\Url::to(['press/news','href'=>$model->href])?>">
        <picture><img src="<?=$model->getImage(\backend\modules\press\models\Press::$imageTypes[0])->getUrl('440x417')?>" alt="<?=$model->title?>"></picture>
    </a>
    <div class="info_news">
        <div class="company"><?=$model::TAG[$model->tag]?></div>
        <a href="<?=\yii\helpers\Url::to(['press/news','href'=>$model->href])?>"><h4><?=$model->title?></h4></a>
        <p><a href="<?=\yii\helpers\Url::to(['press/news','href'=>$model->href])?>"><?=$model->getLimitContent()?></a></p>
        <a href="<?=\yii\helpers\Url::to(['press/news','href'=>$model->href])?>" class="btn btn-primary transparent">Read more</a>
    </div>
</div>
<hr>
