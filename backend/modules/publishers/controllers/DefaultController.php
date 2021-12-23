<?php

namespace backend\modules\publishers\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\publishers\models\Publishers;
use backend\modules\publishers\models\SearchModel;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Publishers::className();

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
