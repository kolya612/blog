<?php
use backend\modules\mecategories\models\Mecategories;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\web\View;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model backend\modules\mecategories\models\Mecategories */
/* @var $form yii\bootstrap5\ActiveForm */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Single Pages for site</h3>
                    <div class="row">
                        <div class="col-xl-9">

                            <?=$form
                                ->field($formModel,'status',['template' => '<label class="control-form-label col-xl-2">Status (ON/OFF):</label><div class="col-xl-10">{input}</div>',])
                                ->dropDownList([\backend\modules\events\models\Events::STATUS_DISABLED => 'DISABLED',\backend\modules\events\models\Events::STATUS_ACTIVE => 'ACTIVE'],['class' => 'form-control form-control-solid row'])
                                ->label(false);
                            ?>
                            <?= $form->field($formModel, 'title',[
                                'template' => '<label class="control-form-label col-xl-2">Title:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'sub_title',[
                                'template' => '<label class="control-form-label col-xl-2">Sub Title:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'description',[
                                'template' => '<label class="control-form-label col-xl-2">Main text:</label><div class="col-xl-10" style="padding:0px 25px 0px 0px!important">{input}</div>',
                            ])
                                ->textarea(['class' => 'form-control form-control-solid','style' => 'min-height: 600px'])
                                ->label(false)
                                ->widget(CKEditor::className(),[
                                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                                        'preset' => 'standard', // basic, standard, full
                                        'inline' => false,
                                    ]),
                                ])
                            ?>

                            <br/>
                            <br/>
                            <br/>
                            <br/>

                            <h4>Banner Image</h4>
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => \backend\modules\pages\models\Pages::$imageTypes[0],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>


                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <?= $form->field($formModel, 'seo_title',[
                                'template' => '<label class="control-form-label col-xl-2">SEO Title:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'seo_keywords',[
                                'template' => '<label class="control-form-label col-xl-2">SEO Keywords:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'seo_description',[
                                'template' => '<label class="control-form-label col-xl-2">SEO Description:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>

                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <!--
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => Mecategories::$imageTypes[0],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>
                            <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>

                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>


            <div class="col-xl-1"></div>
        </div>

        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>
