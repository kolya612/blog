<?php
namespace frontend\controllers;

use backend\modules\events\models\Events;
use backend\modules\pages\models\Pages;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

/**
 * Site controller
 */
class EventsController extends BaseController
{

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query'=>Events::find()->where(['status'=>Events::STATUS_ACTIVE]),
            'pagination'=>[
                'pageSize'=>2
            ]
        ]);

        $page = Pages::findByHref('events')->one();
        $this->setSeo(
            $page->seo_title?$page->seo_title:$page->title,
            $page->seo_keywords,
            $page->seo_description,
            $page->getImage($page::$imageTypes[0])->getUrl()
        );

        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'page'=>$page
        ]);
    }

    public function actionEvent($href)
    {
        $model = Events::findOne(['href' => $href]);
        if ($model) {
            $this->setSeo(
                $model->seo_title?$model->seo_title:$model->title,
                $model->seo_keywords,
                $model->seo_description,
                $model->getImage($model::$imageTypes[0])->getUrl()
            );

            return $this->render('event',[
                'model'=>$model,
                'events'=>Events::getNextEvents($model->created_at, 2)
            ]);
        }else{
            throw new NotFoundHttpException('Page "' . $href . '" not found ', 404);
        }
    }
}
