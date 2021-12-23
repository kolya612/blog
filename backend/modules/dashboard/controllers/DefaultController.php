<?php

namespace backend\modules\dashboard\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\members\models\Members;
use backend\modules\members\models\MembersViewHistory;
use backend\modules\workouts\models\Workouts;
use backend\modules\workouts\models\SearchModel;
use Yii;

class DefaultController extends OneModelBaseController
{
    public function actionIndex(){
        $viewsCount=0;
        $membersCount=0;
        $members=[];
        return $this->render('index',['members'=>$members,'membersCount'=>$membersCount,'viewsCount'=>$viewsCount]);
    }

}
