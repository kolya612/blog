<?php

namespace backend\modules\events\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\events\models\Events;
use backend\modules\events\models\SearchModel;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Events::className();

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
