<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
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

/**
 * Site controller
 */
class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $before = parent::beforeAction($action);

        return $before;
    }

    public function setSeo($title,$keywords,$description,$img)
    {
        $this->view->title=$title;
        $this->view->registerMetaTag(
            ['name' => 'keywords', 'content' => $keywords]
        );
        $this->view->registerMetaTag(
            ['name' => 'description', 'content' => $description]
        );

        $this->view->registerMetaTag(
            ['property' => 'og:title', 'content' => $title]
        );
        $this->view->registerMetaTag(
            ['property' => 'og:description', 'content' => $description]
        );

        if(!empty($img)) {
            $this->view->registerMetaTag(
                ['property' => 'og:image', 'content' => ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $img]
            );
        }
    }

}
