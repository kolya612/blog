<?php

namespace backend\modules\contact\models;

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

class Contact  extends WbpActiveRecord
{
    const SCENARIO_FRONTEND='frontend';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contact}}';
    }

    public static function getPurposes(){
        return [
            1=>'Test',
            2=>'Test2',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name','email','purpose','phone','message'],'safe','on'=>[self::SCENARIO_FRONTEND, self::ADMIN_ADD_SCENARIO,self::ADMIN_EDIT_SCENARIO]],
            [['first_name','email'],'required','on'=>[self::SCENARIO_FRONTEND]],
            ['email','email'],
        ];
    }

    public function getPurposeTitle(){
        if(!$this->purpose) return false;
        return self::getPurposes()[$this->purpose];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
        ];
    }

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([ 'info@'.$_SERVER['HTTP_HOST'] => $this->first_name])
            ->setReplyTo([$this->email => $this->first_name])
            ->setSubject('New contact request')
            ->setTextBody("Name:".$this->first_name."\nPhone:".$this->phone."\nEmail:".$this->email."\nPurpose:".$this->getPurposeTitle()."\n\n".$this->message)
            ->send();
    }

}