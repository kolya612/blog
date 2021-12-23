<?php

namespace backend\modules\brands\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\brands\models\Brands;
use backend\modules\brands\models\SearchModel;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Brands::className();

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
