<?php
namespace frontend\controllers;

use backend\modules\advertiser\models\Advertiser;
use backend\modules\contact\models\Contact;
use backend\modules\pages\models\Pages;
use backend\modules\publishers\models\Publishers;
use common\models\Config;
use Yii;
use yii\base\BaseObject;

/**
 * Site controller
 */
class ContactController extends BaseController
{

    public function actionIndex()
    {
        $model=new Contact(['scenario'=>Contact::SCENARIO_FRONTEND]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Config::getParameter('email', false)) && $model->save()) {
                return $this->redirect(['thank-you-for-contact']);
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        $page = Pages::findByHref('contact')->one();
        $this->setSeo(
            $page->seo_title?$page->seo_title:$page->title,
            $page->seo_keywords,
            $page->seo_description,
            $page->getImage($page::$imageTypes[0])->getUrl()
        );

        return $this->render('index',[
            'model'=>$model
        ]);
    }

    public function actionAdvertiser()
    {
        $model=new Advertiser(['scenario'=>Advertiser::SCENARIO_FRONTEND]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Config::getParameter('email', false)) && $model->save()) {
                return $this->redirect(['thank-you-for-contact']);
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('advertiser',[
            'model'=>$model
        ]);
    }

    public function actionPublisher()
    {
        $model=new Publishers(['scenario'=>Publishers::SCENARIO_FRONTEND]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Config::getParameter('email', false)) && $model->save()) {
                return $this->redirect(['thank-you-for-contact']);
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('publisher',[
            'model'=>$model
        ]);
    }

    public function actionThankYouForContact(){
        $this->layout='main-without-footer';
        return $this->render('thank-you-contact');
    }
}
