<?php

?>


<section class="main-banner" style="background-image: url('<?=$model->image->getUrl()?>')">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge"><?=$model->title?></h1>
            <h2 class="subtitle"><?=$model->sub_title?></h2>
        </div>
    </div>
</section>

<section class="legal-document">
    <div class="container">
        <div class="legal-document__content">

            <?=$model->description?>

        </div>

        <div class="shadow-line-wrapper"></div>
    </div>
</section>

