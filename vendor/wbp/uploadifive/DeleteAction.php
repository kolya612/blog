<?php

namespace wbp\uploadifive;

use wbp\images\models\Image;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;

class DeleteAction extends \yii\base\Action {
    /**
     * Csrf Verify Enable
     * @var bool
     */
    public $csrf = true;

    public function init()
    {
        Yii::$app->request->enableCsrfValidation = false;

        if ($this->csrf && !$this->verifyCsrf()) {
            throw new \yii\web\BadRequestHttpException('csrf verify fail.');
        }

        return parent::init();
    }

    public function run() {

        $id=(int)Yii::$app->getRequest()->post('id');

        $image=Image::findOne($id);
        if($image->id){
            $image->delete();
        }

    }


}
