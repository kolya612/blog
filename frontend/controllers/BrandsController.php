<?php
namespace frontend\controllers;

use backend\modules\brands\models\Brands;
use backend\modules\pages\models\Pages;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class BrandsController extends BaseController
{

    public function actionIndex()
    {
        $page = Pages::findByHref('brands')->one();
        $this->setSeo(
            $page->seo_title?$page->seo_title:$page->title,
            $page->seo_keywords,
            $page->seo_description,
            $page->getImage($page::$imageTypes[0])->getUrl()
        );

        return $this->render('index',[
            'model'=>Brands::getMainBrands(),
            'brands'=>Brands::getAllActiveBrands(),
            'page'=>$page
        ]);
    }

    public function actionBrand($href)
    {
        $model = Brands::findOne(['href' => $href]);
        if ($model) {
            $this->setSeo(
                $model->seo_title?$model->seo_title:$model->title,
                $model->seo_keywords,
                $model->seo_description,
                $model->getImage($model::$imageTypes[4])->getUrl()
            );
            $brands = new Brands();

            return $this->render('brand',[
                'model'=>$model,
                'brands'=>$brands->getAllActiveBrands()
            ]);
        }else{
            throw new NotFoundHttpException('Page "' . $href . '" not found ', 404);
        }
    }
}
