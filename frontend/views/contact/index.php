<?php
    use yii\bootstrap5\ActiveForm;

?>

<section class="main-banner banner-contact-us">
    <div class="content__container line-bottom container">
        <div class="main-banner__content">
            <h1 class="title-badge">Contact Us</h1>
            <h2 class="subtitle"><strong>Get in touch</strong> with us</h2>
        </div>

        <div class="text-map">
            <p class="text"><?=\common\models\Config::getParameter('address',false)?></p>
        </div>
    </div>
</section>

<section class="website-main-form">
    <div class="container">
        <div class="website-main-form__content">
            <? $form = ActiveForm::begin();?>
                <h2 class="main-form__title">Questions? We’re here to help.</h2>

                <div class="form-group__wrapper">

                    <div class="form-content-row">
                        <?= $form->field($model, 'first_name',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('first_name')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'email',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('email')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>
                    </div>

                    <div class="form-content-row">
                        <?= $form->field($model, 'phone',['options'=>['class'=>'form-group']])
                            ->textInput(['placeholder'=>$model->getAttributeLabel('phone')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                        <?= $form->field($model, 'purpose',['options'=>['class'=>'form-group']])
                            ->dropDownList(\backend\modules\contact\models\Contact::getPurposes(),['prompt'=>'Purpose','placeholder'=>$model->getAttributeLabel('purpose')])
                            ->label(null,['class'=>'label-hidden'])
                        ?>

                    </div>

                    <?= $form->field($model, 'message',['options'=>['class'=>'form-group']])
                        ->textarea(['placeholder'=>$model->getAttributeLabel('message')])
                        ->label(null,['class'=>'label-hidden'])
                    ?>
                </div>

                <button type="submit" class="btn">SEND</button>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="shadow-line-wrapper"></div>
    </div>
</section>

<?=$this->render('../elements/follow-us')?>