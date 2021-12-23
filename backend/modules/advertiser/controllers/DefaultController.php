<?php

namespace backend\modules\advertiser\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\advertiser\models\Advertiser;
use backend\modules\advertiser\models\SearchModel;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Advertiser::className();

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
