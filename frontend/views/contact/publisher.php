<?php

use yii\bootstrap5\ActiveForm;

$bundle=\frontend\assets\AppAsset::register($this);
?>


<section class="main-banner publishers-form">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge">Publishers</h1>
            <h2 class="subtitle"><strong>Become a Publisher</strong></h2>
        </div>
    </div>
</section>

<section class="website-main-form">
    <div class="container">
        <div class="website-main-form__content">
            <? $form = ActiveForm::begin();?>
                <h2 class="main-form__title">Become a Publisher</h2>

                <div class="form-group__wrapper">

                    <div class="form-content-row">
                        <?= $form->field($model, 'company_name',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('company_name').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'country',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('country')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
<!---->
<!--                        <div class="form-group">-->
<!--                            <select class="form-select">-->
<!--                                <option>Country</option>-->
<!--                                <option>Country</option>-->
<!--                                <option>Country</option>-->
<!--                            </select>-->
<!--                        </div>-->
                    </div>

                    <?= $form->field($model, 'address',['options'=>['class'=>'form-group']])
                        ->textarea(['placeholder'=>$model->getAttributeLabel('address')])
                        ->label(null,['class'=>'label-hidden'])
                    ?>

                    <div class="form-content-row">
                        <?= $form->field($model, 'state',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('state')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'zip',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('zip')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'city',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('city').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'website',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('website')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'referrer',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('referrer')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>
                </div>

                <div class="form-group__wrapper">

                    <div class="title-wrapper">
                        <h3 class="title">Marketing Information</h3>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'payment_model',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\publishers\models\Publishers::getPaymentModels(),['prompt'=>$model->getAttributeLabel('payment_model')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'primary_category',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('primary_category')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <?= $form->field($model, 'comments',['options'=>['class'=>'form-group']])
                        ->textarea(['placeholder'=>$model->getAttributeLabel('comments')])
                        ->label(null,['class'=>'label-hidden'])
                    ?>

                    <div class="form-content-row">
                        <?= $form->field($model, 'secondary_category',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('secondary_category')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>
                </div>

                <div class="form-group__wrapper p-sm">

                    <div class="title-wrapper">
                        <h3 class="title">Contact Information</h3>
                    </div>

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
                        <?= $form->field($model, 'job_title',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('job_title')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                        <?= $form->field($model, 'work_phone',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('work_phone').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'cell_phone',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('cell_phone')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                        <?= $form->field($model, 'email',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('email').'*'])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'timezone',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\publishers\models\Publishers::getTimezones(),['prompt'=>$model->getAttributeLabel('timezone')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                </div>

                <div class="form-group__wrapper p-sm">
                    <div class="title-wrapper">
                        <h3 class="title">Payment Information</h3>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'payment_to',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('payment_to')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                        <?= $form->field($model, 'currency',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\publishers\models\Publishers::getCurrencies(),['prompt'=>$model->getAttributeLabel('currency')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'tax_class',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('tax_class')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'ssn',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('ssn')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>
                </div>

                <?= $form->field($model, 'agree',['options'=>['class'=>'footer-form-check']])
                    ->checkbox()
                    ->label('I agree to the <a class="link" href="'.\yii\helpers\Url::to(['site/generic-page','href'=>'terms-and-conditions']).'">Terms and Conditions*</a>',['class'=>'form-check-label'])
                ?>

                <button type="submit" class="btn">Submit</button>
            <? ActiveForm::end(); ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>

