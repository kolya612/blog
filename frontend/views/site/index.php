<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

?>
<section class="lead">
    <div class="container we_exist__content text-sm-end text-start">
        <h2>
            <span>Led by a laser-focused<br> team</span> with unequaled<br> know-how.
        </h2>
        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'leadership'])?>" class="btn btn-warning ">WHO WE ARE</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>
<section class="delivering">
    <div class="container we_exist__content">
        <h2>
            Delivering <span>value and<br> innovation</span> for evolving<br> consumer needs.
        </h2>
        <a href="<?=\yii\helpers\Url::to(['site/generic-page','href'=>'who-we-are'])?>" class="btn btn-warning ">WHO WE ARE</a>
    </div>
    <div class="we_exit__img-box">

    </div>
</section>
