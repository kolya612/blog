<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$bundle=\frontend\assets\AppAsset::register($this);
$this->title = $name;
?>

<section class="helper-page">
    <div class="container">
        <div class="helper-page__content-wrapper">
            <h2 class="title-error"><?= Html::encode($name) ?></h2>
            <h1 class="title"><?= Html::encode($message) ?></h1>
            <p class="text">Return to homepage discover world of LimitlessX.</p>
        </div>

        <div class="helper-page__btn-block">
            <a class="btn" href="<?=\yii\helpers\Url::to(['index'])?>">BACK TO HOMEPAGE</a>
            <a class="btn btn-primary transparent" href="<?=\yii\helpers\Url::to(['brands/index'])?>">CHECK OUR BRANDS</a>
        </div>
    </div>
</section>