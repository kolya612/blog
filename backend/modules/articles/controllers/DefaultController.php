<?php

namespace backend\modules\articles\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\articles\models\Articles;
use backend\modules\categories\models\Categories;
use backend\modules\articles\models\SearchModel;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Articles::className();

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
