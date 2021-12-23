<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

?>
<section class="">
    <div class="main-banner brands">
        <div class="content__container container">
            <div class="main-banner__content">
                <h1 class="title-badge">Our brands</h1>
                <h2 class="subtitle">We proudly work with the <strong>Most Prestigious Brands</strong> in the consumer industry.</h2>
            </div>
        </div>
    </div>
</section>
<?php
    $counter = 0;
    foreach ($model as $brand) {
        if($counter<4) {
            $logo = $brand->getImage($brand::$imageTypes[3]);
            $background = $brand->getImage($brand::$imageTypes[2]);
            if($logo->id) {
                $logo_image = $logo->getUrl();
                $background_image = $background->getUrl();
            } else {
                $logo_image = false;
                $background_image = false;
            }
 ?>
    <section class="brands_item" style="background-image: url(<?=$background_image?>)">
        <div class="container h-100">
            <div class="row h-100 justify-content-center
                        <?php if (($counter % 2) == 0) { echo 'justify-content-md-start';} else { echo 'justify-content-md-end';}  ?>
            ">
                <div class="col-11 pt-5 pt-sm-0 col-sm-5 offset-sm-1 d-flex flex-wrap align-content-start align-content-md-center h-100">
                    <picture><source srcset="<?=$logo_image?>" type="image/webp"><img src="<?=$logo_image?>" alt="" /></picture>
                    <p>
                        Our all-natural formula combines powerful ingredients that help get the buildup of glucose out of the blood and into the body’s cells.
                        <br><br>
                        By helping activate the metabolic master switch then oxidise glucose to provide the right energy for cells and to help balance your blood sugar.
                    </p>
                    <a href="/brands/<?=$brand->href?>" class="btn btn-border-dark transparent">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>
<?php
            $counter++;
        }
    }
?>

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
                <a href="/brands/<?=$brand->href?>"><picture><img class="w-100 d-block mb-4"  src="<?=$logo_image?>" alt=""></picture></a>
            </div>
        <?php

            $counter++;
        }
        ?>
        </div>
    </div>
</section>