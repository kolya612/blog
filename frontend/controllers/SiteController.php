<?php
namespace frontend\controllers;

use backend\modules\faq\models\FAQ;
use backend\modules\pages\models\Pages;
use common\models\WbpActiveRecord;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use wbp\dumper\Dumper;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends BaseController
{

    public function actionError(){
        $this->layout='main-without-footer';
        $exception = Yii::$app->errorHandler->exception;
        return $this->render('error',[
            'name'=>$exception->statusCode,
            'message'=>$exception->getMessage(),
        ]);
    }


    public function actionIndex()
    {
        $page = Pages::findByHref('index')->one();
        $this->setSeo(
            $page->seo_title?$page->seo_title:$page->title,
            $page->seo_keywords,
            $page->seo_description,
            $page->getImage($page::$imageTypes[0])->getUrl()
        );

        return $this->render('index');
    }

    public function actionGenericPage($href)
    {
        $page = Pages::findByHref($href)->one();
        $this->setSeo(
            $page->seo_title?$page->seo_title:$page->title,
            $page->seo_keywords,
            $page->seo_description,
            $page->getImage($page::$imageTypes[0])->getUrl()
        );

        $actionName = 'action' . str_replace(' ', '', ucwords(strtolower(str_replace('-', ' ', $href))));
        if (method_exists($this, $actionName)) return call_user_func([$this, $actionName], $page);

        $view_file = $this->getViewPath($href) . DIRECTORY_SEPARATOR . $href . ".php";
        if (file_exists($view_file)) return $this->render($href, ['model' => $page]);

        if (!$page) {
            throw new NotFoundHttpException('Page "' . $href . '" not found ', 404);
        }

        return $this->render('generic-page', ['model' => $page]);
    }

    public function actionFaq()
    {
        $models=FAQ::find()->all();

        $this->setSeo(
            'FAQs',
            'FAQs',
            'FAQs',
            false
        );

        return $this->render('faq',['models'=>$models]);
    }
}
