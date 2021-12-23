<?php
namespace frontend\controllers;

use backend\modules\pages\models\Pages;
use backend\modules\press\models\Press;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\data\Pagination;

/**
 * Site controller
 */
class PressController extends BaseController
{

    public function actionIndex()
    {
        $dataProvider=new ActiveDataProvider([
            'query'=>Press::find()->where(['status'=>Press::STATUS_ACTIVE]),
            'pagination'=>[
                'pageSize'=>2
            ]
        ]);

        $page = Pages::findByHref('press')->one();
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

    public function actionNews($href)
    {
        $model = Press::findOne(['href' => $href]);
        if ($model) {
            $this->setSeo(
                $model->seo_title?$model->seo_title:$model->title,
                $model->seo_keywords,
                $model->seo_description,
                $model->getImage($model::$imageTypes[1])->getUrl()
            );

            return $this->render('news',[
                'model' => $model,
                'next_news' => Press::getNextNews($model->created_at, 1)
            ]);
        }else{
            throw new NotFoundHttpException('Page "' . $href . '" not found ', 404);
        }
    }
}
