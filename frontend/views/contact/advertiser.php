<?php

use yii\bootstrap5\ActiveForm;

$bundle=\frontend\assets\AppAsset::register($this);
?>

<section class="main-banner advertisers-form">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge">Advertisers</h1>
            <h2 class="subtitle"><strong>Become an Advertiser</strong></h2>
        </div>
    </div>
</section>

<section class="website-main-form">
    <div class="container">
        <div class="website-main-form__content">
            <? $form = ActiveForm::begin();?>
                <h2 class="main-form__title">Become an Advertiser</h2>
                <div class="form-group__wrapper">

                    <div class="form-content-row">
                        <?= $form->field($model, 'first_name',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('first_name').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'last_name',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('last_name').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'email',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('email').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'company',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('company').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'skype',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('skype').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                        <?= $form->field($model, 'telegram',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('telegram').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'pricing_model',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\advertiser\models\Advertiser::getPricingModels(),['prompt'=>$model->getAttributeLabel('pricing_model').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'budget',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('budget').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                    </div>

                    <?= $form->field($model, 'product_name',['options'=>['class'=>'form-group']])
                        ->textarea(['placeholder'=>$model->getAttributeLabel('product_name').'*'])
                        ->label(null,['class'=>'label-hidden'])
                    ?>

                    <div class="form-content-row">
                        <?= $form->field($model, 'market',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\advertiser\models\Advertiser::getMarkets(),['prompt'=>$model->getAttributeLabel('market').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                        <?= $form->field($model, 'traffic_type',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\advertiser\models\Advertiser::getTrafficTypes(),['prompt'=>$model->getAttributeLabel('traffic_type').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                    </div>

                    <div class="form-content-row">

                        <?= $form->field($model, 'product_link',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('product_link').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'direct_advertiser',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\advertiser\models\Advertiser::getDirectAdvertisers(),['prompt'=>$model->getAttributeLabel('direct_advertiser').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                    </div>
                </div>

            <?= $form->field($model, 'agree',['options'=>['class'=>'footer-form-check']])
                ->checkbox()
                ->label('I agree to the <a class="link" href="'.\yii\helpers\Url::to(['site/generic-page','href'=>'terms-and-conditions']).'">Terms and Conditions*</a>',['class'=>'form-check-label'])
            ?>

<!--                <div class="footer-form-check">-->
<!--                    <label class="form-check-label" for="terms">-->
<!--                        <input class="form-check-input" type="checkbox" value="" id="terms">-->
<!--                        I agree to the <a class="link" href="#">Terms and Conditions*</a>-->
<!--                    </label>-->
<!--                </div>-->

                <button type="submit" class="btn">Submit</button>
            <? ActiveForm::end(); ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>


