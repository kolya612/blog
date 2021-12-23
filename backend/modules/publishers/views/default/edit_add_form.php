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

                    <?= $form->field($formModel, 'company_name',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('company_name').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'country',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('country').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'address',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('address').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'state',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('state').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'zip',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('zip').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'city',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('city').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'website',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('website').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'referrer',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('referrer').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'payment_model',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('payment_model').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'primary_category',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('primary_category').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'comments',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('comments').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'secondary_category',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('secondary_category').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
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
                    <?= $form->field($formModel, 'job_title',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('job_title').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'work_phone',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('work_phone').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'cell_phone',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('cell_phone').':</label><div class="col-sm-8">{input}</div>',
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
                    <?= $form->field($formModel, 'timezone',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('timezone').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'payment_to',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('payment_to').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'currency',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('currency').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'tax_class',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('tax_class').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'ssn',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('ssn').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>


<!--                    --><?//=$form
//                        ->field($formModel,'purpose',[
//                            'template' => '<label class="control-form-label col-sm-3">Purpose:</label><div class="col-sm-8">{input}</div>',
//                        ])
//                        ->dropDownList(\backend\modules\contact\models\Contact::getPurposes(),['class' => 'form-control form-control-solid'])
//                        ->label(false);
//                    ?>
<!--                    --><?//= $form->field($formModel, 'email',[
//                        'template' => '<label class="control-form-label col-sm-3">Email:</label><div class="col-sm-8">{input}</div>',
//                    ])
//                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
//                        ->label(null, ['class'=>'control-form-label col-sm-3'])
//                    ?>
<!--                    --><?//= $form->field($formModel, 'phone',[
//                        'template' => '<label class="control-form-label col-sm-3">Phone:</label><div class="col-sm-8">{input}</div>',
//                    ])
//                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
//                        ->label(null, ['class'=>'control-form-label col-sm-3'])
//                    ?>
<!--                    --><?//= $form->field($formModel, 'message',[
//                        'template' => '<label class="control-form-label col-sm-3">Message:</label><div class="col-sm-8">{input}</div>',
//                    ])
//                        ->textarea(['maxlength' => true, 'class' => 'form-control form-control-solid'])
//                        ->label(null, ['class'=>'control-form-label col-sm-3'])
//                    ?>

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
