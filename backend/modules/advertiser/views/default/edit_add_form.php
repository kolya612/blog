<?php
use backend\modules\members\models\Members;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\members\models\Members */
/* @var $form yii\bootstrap5\ActiveForm */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->

        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-7">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Main informations</h3>

                    <?= $form->field($formModel, 'first_name',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('first_name').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'last_name',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('last_name').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'company',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('company').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'email',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('email').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'skype',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('skype').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'telegram',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('telegram').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'pricing_model',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('pricing_model').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->dropDownList(\backend\modules\advertiser\models\Advertiser::getPricingModels(),['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'budget',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('budget').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'product_name',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('product_name').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'market',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('market').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->dropDownList(\backend\modules\advertiser\models\Advertiser::getMarkets(),['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'traffic_type',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('traffic_type').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->dropDownList(\backend\modules\advertiser\models\Advertiser::getTrafficTypes(),['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'product_link',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('product_link').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'direct_advertiser',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('direct_advertiser').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->dropDownList(\backend\modules\advertiser\models\Advertiser::getDirectAdvertisers(),['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>

                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>

            <div class="col-xl-1"></div>
        </div>
    </div>
</div>
<br /><br />

<?php ActiveForm::end(); ?>
