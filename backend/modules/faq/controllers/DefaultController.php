<?php

namespace backend\modules\faq\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\faq\models\SearchModel;
use backend\modules\faq\models\FAQ;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=FAQ::className();

        return parent::init();
    }

    public function actionIndex(){
        $modelName=$this->ModelName;
        $searchModel=new SearchModel();
        $params=\Yii::$app->request->get();
        $dataProvider=$searchModel->search($modelName,$params);

        return $this->render('index',['dataProvider'=>$dataProvider,'searchModel'=>$searchModel]);
    }

}
