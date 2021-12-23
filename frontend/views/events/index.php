<?php

use yii\widgets\ListView;

$bundle=\frontend\assets\AppAsset::register($this);

$background = $page->getImage($page::$imageTypes[0]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }
?>
<section class="main-banner all-events" style="background-image: url('<?=$background_image?>')">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$page->title?></h1>
            <h2 class="subtitle"><?=$page->sub_title?></h2>
        </div>
    </div>
</section>
<section class="all-event-content">
    <div class="container">
        <div class="content">
            <?
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options'=>[
                        'class'=>'row',
                    ],
                    'itemOptions' => ['tag'=>'div','class'=>'item_event'],
                    'pager'=>[
                            'disabledListItemSubTagOptions'=>[
                                    'class'=>'link'
                            ],
                            'linkOptions'=>[
                                    'class'=>'link'
                            ]
                    ],
                    'layout' => '
                            <div class="events-card-group">{items}</div>
                            {pager}
                        ',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_listItem',['model' => $model]);
                    }
                ]);
            ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>