<?php


?>


<section class="main-banner faq">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge">FAQs</h1>
            <h2 class="subtitle">Review our <strong>frequently asked questions</strong> for any doubt.</h2>
        </div>
    </div>
</section>

<section class="faq-content">
    <div class="container">
        <div class="content">
            <div class="accordion faq__accordion accordion-flush" id="accordionFaq">

                <a class="btn btn-border-dark collapse-all" href="" onclick="$('.collapseAll').collapse('hide');return false;">COLLAPSE ALL</a>

                <? foreach ($models as $model){ ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading_<?=$model->id?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_<?=$model->id?>" aria-expanded="false" aria-controls="collapse_<?=$model->id?>">
                                <?=$model->title?>
                            </button>
                        </h2>
                        <div id="collapse_<?=$model->id?>" class="accordion-collapse collapse collapseAll" aria-labelledby="heading_<?=$model->id?>">
                            <div class="accordion-body">
                                <?=$model->description?>
                            </div>
                        </div>
                    </div>
                    <hr>
                <? } ?>
            </div>
        </div>

        <div class="shadow-line-wrapper"></div>
    </div>
</section>

