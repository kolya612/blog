


<section class="grey_we_do">
    <div class="container">
        <h2>Explore Our Brands</h2>
        <div class="row">
            <?php
            $counter = 0;
            foreach ($model as $brand) {
                $logo = $brand->getImage($brand::$imageTypes[0]);
                if($logo->id) {
                    $logo_image = $logo->getUrl();
                } else {
                    $logo_image = false;
                }
                if($counter%3==0) {
                    echo '</div><div class="row">';
                }
                ?>
                <div class="col-12 col-md-4">
                    <a href="<?=\yii\helpers\Url::to(['brands/brand','href'=>$brand->href])?>"><picture><img class="w-100 d-block mb-4"  src="<?=$logo_image?>" alt=""></picture></a>
                </div>
                <?php

                $counter++;
            }
            ?>
        </div>

        <div class="text-center">
            <a href="<?=\yii\helpers\Url::to(['brands/index'])?>" class="btn btn-border-dark transparent d-inline-block d-md-none">Explore All Brands</a>
        </div>
    </div>
</section>
