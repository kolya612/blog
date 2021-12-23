<?php
use backend\modules\members\models\Members;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

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
                    <?= $form->field($formModel, 'title',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('title').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>

                    <?= $form->field($formModel, 'description',[
                        'template' => '<label class="control-form-label col-sm-3">'.$formModel->getAttributeLabel('description').':</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textarea(['maxlength' => true, 'class' => 'form-control form-control-solid'])
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
