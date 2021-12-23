<?php
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\web\View;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->
        <div class="row">
            <div class="col-xl-12">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">The Brands</h3>
                    <div class="row">
                        <div class="col-xl-6">
                            <?=$form
                                ->field($formModel,'status',['template' => '<label class="control-form-label col-xl-2">Status (ON/OFF):</label><div class="col-xl-10">{input}</div>',])
                                ->dropDownList([\backend\modules\brands\models\Brands::STATUS_DISABLED => 'DISABLED',\backend\modules\brands\models\Brands::STATUS_ACTIVE => 'ACTIVE'],['class' => 'form-control form-control-solid row'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-xl-6">
                            <?=$form
                                ->field($formModel,'visible',['template' => '<label class="control-form-label col-xl-2">Visible<br />(in menu):</label><div class="col-xl-10">{input}</div>',])
                                ->dropDownList([0 => 'UNVISIBLE',1 => 'VISIBLE'],['class' => 'form-control form-control-solid row'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-xl-12">
                            <div class="row">
                                <h3 class="text-dark font-weight-bold mb-10 col-xl-12" style="text-align: center; padding: 30px 0px 20px 0px;">For Listing:</h3>
                                <div class="col-xl-6">
                                    <?= $form->field($formModel, 'brand_name',[
                                        'template' => '<label class="control-form-label col-xl-2">Brand Name:</label><div class="col-xl-10">{input}</div>',
                                    ])
                                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                        ->label(false)
                                    ?>
                                    <?= $form->field($formModel, 'description',[
                                        'template' => '<label class="control-form-label col-sm-2">Listing Content:</label><div class="col-sm-10" style="padding-left:0px!important">{input}</div>',
                                    ])
                                        ->textarea(['class' => 'form-control form-control-solid'])
                                        ->label(false)
                                    ?>
                                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <h4>Image for listing</h4>
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <?php
                                                echo \wbp\imageUploader\ImageUploader::widget([
                                                    'style' => 'estoreMultiple',
                                                    'data' => ['size' => '123x123'],
                                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[0],
                                                    'item_id' => $formModel->id,
                                                    'limit' => 1
                                                ]);
                                                ?>
                                            </div>
                                            <br /><br />
                                        </div>
                                        <div class="col-xl-6">
                                            <h4>Image for listing background</h4>
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <?php
                                                echo \wbp\imageUploader\ImageUploader::widget([
                                                    'style' => 'estoreMultiple',
                                                    'data' => ['size' => '123x123'],
                                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[2],
                                                    'item_id' => $formModel->id,
                                                    'limit' => 1
                                                ]);
                                                ?>
                                            </div>
                                        </div>
                                        <!--
                                        <div class="col-xl-6">
                                            <h4>Image for big listing</h4>
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <?php
                                                echo \wbp\imageUploader\ImageUploader::widget([
                                                    'style' => 'estoreMultiple',
                                                    'data' => ['size' => '123x123'],
                                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[1],
                                                    'item_id' => $formModel->id,
                                                    'limit' => 1
                                                ]);
                                                ?>
                                            </div>
                                            <br /><br />
                                        </div>
                                        <div class="col-xl-6">
                                            <h4>Image for big listing hover</h4>
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <?php
                                                echo \wbp\imageUploader\ImageUploader::widget([
                                                    'style' => 'estoreMultiple',
                                                    'data' => ['size' => '123x123'],
                                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[8],
                                                    'item_id' => $formModel->id,
                                                    'limit' => 1
                                                ]);
                                                ?>
                                            </div>
                                            <br /><br />
                                        </div>
                                        -->
                                    </div>
                                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <hr />
                        </div>
                        <div class="col-xl-12">
                            <h3 class="text-dark font-weight-bold mb-10" style="text-align: center; padding: 30px 0px 20px 0px;">Main Content + SEO:</h3>
                            <?= $form->field($formModel, 'href',[
                                'template' => '<label class="control-form-label col-xl-2">SEO URL:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'title',[
                                'template' => '<label class="control-form-label col-xl-2">Title:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'url',[
                                'template' => '<label class="control-form-label col-xl-2">Brand website:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'content',[
                                'template' => '<label class="control-form-label col-sm-2">Main Content:</label><div class="col-sm-10">{input}</div>',
                            ])
                                ->textarea(['class' => 'form-control form-control-solid'])
                                ->label(false)->widget(CKEditor::className(),[
                                    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                                        'preset' => 'standard', // basic, standard, full
                                        'inline' => false,
                                    ]),
                                ])
                            ?>
                            <?= $form->field($formModel, 'seo_title',[
                                'template' => '<label class="control-form-label col-sm-2">SEO Title:</label><div class="col-sm-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'seo_description',[
                                'template' => '<label class="control-form-label col-sm-2">SEO Description:</label><div class="col-sm-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'seo_keywords',[
                                'template' => '<label class="control-form-label col-sm-2">SEO Keywords:</label><div class="col-sm-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                            ?>
                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <hr />
                            <br /><br />
                        </div>
                        <h3 class="text-dark font-weight-bold mb-10 col-xl-10" style="text-align: center; padding: 30px 0px 20px 0px;">Image for page:</h3>
                        <div class="col-xl-12">
                            <h4>Logo:</h4>
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[3],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>
                            <br /><br />
                        </div>
                        <div class="col-xl-3">
                            <h4>Background:</h4>
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[4],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>
                            <br /><br />
                        </div>
                        <div class="col-xl-12">
                            <h4>Image Gallery:</h4>
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[5],
                                    'item_id' => $formModel->id,
                                    'limit' => 3
                                ]);
                                ?>
                            </div>
                            <br /><br />
                        </div>
<!--                        <div class="col-xl-3">-->
<!--                            <h4>Image Gallery 2</h4>-->
<!--                            <div class="image-input image-input-outline" id="kt_image_1">-->
<!--                                --><?php
//                                echo \wbp\imageUploader\ImageUploader::widget([
//                                    'style' => 'estoreMultiple',
//                                    'data' => ['size' => '123x123'],
//                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[6],
//                                    'item_id' => $formModel->id,
//                                    'limit' => 1
//                                ]);
//                                ?>
<!--                            </div>-->
<!--                            <br /><br />-->
<!--                        </div>-->
<!--                        <div class="col-xl-3">-->
<!--                            <h4>Image Gallery 3</h4>-->
<!--                            <div class="image-input image-input-outline" id="kt_image_1">-->
<!--                                --><?php
//                                echo \wbp\imageUploader\ImageUploader::widget([
//                                    'style' => 'estoreMultiple',
//                                    'data' => ['size' => '123x123'],
//                                    'type' => \backend\modules\brands\models\Brands::$imageTypes[7],
//                                    'item_id' => $formModel->id,
//                                    'limit' => 1
//                                ]);
//                                ?>
<!--                            </div>-->
<!--                        </div>-->
                        <div class="col-xl-12">
                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>
        </div>
        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>
