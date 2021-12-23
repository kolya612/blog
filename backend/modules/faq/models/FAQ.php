<?php

namespace backend\modules\faq\models;

use backend\modules\exercises\models\Exercises;
use backend\modules\meals\models\Meals;
use backend\modules\progress\models\Progress;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\Config;
use common\models\Data;
use wbp\dumper\Dumper;
use wbp\images\models\Image;
use Yii;
use common\models\WbpActiveRecord;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

class FAQ extends WbpActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faq}}';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','description'],'safe','on'=>[self::ADMIN_ADD_SCENARIO,self::ADMIN_EDIT_SCENARIO]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Question',
            'description' => 'Answer',
        ];
    }

}