<?php

use yii\widgets\ListView;

$bundle=\frontend\assets\AppAsset::register($this);

$background = $page->getImage($page::$imageTypes[0]);
if($background->id) { $background_image = $background->getUrl(); } else { $background_image = false; }
?>
<section class="main-banner media" style="background-image: url('<?=$background_image?>')">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$page->title?></h1>
            <h2 class="subtitle"><?=$page->sub_title?></h2>
        </div>
    </div>
</section>
<section class="press-card">
    <div class="container">
        <div class="press-card__wrapper">
            <div class="content">
                <?
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'options'=>[
                            'class'=>'row',
                        ],
                        'pager'=>[
                            'disabledListItemSubTagOptions'=>[
                                'class'=>'link'
                            ],
                            'linkOptions'=>[
                                'class'=>'link'
                            ]
                        ],
                        'layout' => '
                                    {items}
                                    {pager}
                                ',
                        'itemView' => function ($model, $key, $index, $widget) {
                            return $this->render('_listItem',['model' => $model]);
                        }
                    ]);
                ?>
            </div>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>
