<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta property="og:site_name" content="<?=$_SERVER['HTTP_HOST']?>">
    <?php $this->head() ?>
</head>
<body <?=(Yii::$app->controller->id=='exercise' && Yii::$app->controller->action->id=='view')?'class="video-page"':''?>>
<?php $this->beginBody() ?>

<div style="position: fixed; right: 0; top: 0; z-index: 1100;" id="alerts"></div>
<?=$this->render('../elements/alert')?>
<?=$this->render('../elements/header')?>

<?= $content ?>

<?=$this->render('../elements/footer')?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
