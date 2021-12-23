<?php

namespace backend\modules\publishers\models;

use backend\modules\exercises\models\Exercises;
use backend\modules\meals\models\Meals;
use backend\modules\progress\models\Progress;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\Data;
use wbp\dumper\Dumper;
use wbp\images\models\Image;
use Yii;
use common\models\WbpActiveRecord;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

class Publishers  extends WbpActiveRecord
{

    const SCENARIO_FRONTEND='frontend';
    public $agree;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%publishers}}';
    }

    public static function getPaymentModels(){
        return [
            1=>'Test',
            2=>'Test2',
        ];
    }

    public static function getTimezones(){
        return [
            1=>'Test',
            2=>'Test2',
        ];
    }
    public static function getCurrencies(){
        return [
            1=>'USD',
            2=>'CAD',
            3=>'BTC',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_name','country','address','state','zip','city','website','referrer','payment_model','primary_category','comments','secondary_category','first_name','last_name','job_title','work_phone','cell_phone','email','timezone','payment_to','currency','tax_class','ssn'],'safe','on'=>[self::ADMIN_ADD_SCENARIO,self::ADMIN_EDIT_SCENARIO,self::SCENARIO_FRONTEND]],
            [['company_name','city','first_name','last_name','work_phone','email'],'required','on'=>[self::SCENARIO_FRONTEND]],
            ['agree','required','on'=>self::SCENARIO_FRONTEND,'requiredValue' => 1,'message'=>'Please agree terms and conditions'],
        ];
    }

    public function getPaymentModelTitle(){
        if(!$this->payment_model) return false;
        return self::getPaymentModels()[$this->payment_model];
    }
    public function getTimezoneTitle(){
        if(!$this->timezone) return false;
        return self::getTimezones()[$this->timezone];
    }
    public function getCurrencyTitle(){
        if(!$this->currency) return false;
        return self::getCurrencies()[$this->currency];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'country' => 'Country',
            'address' => 'Address',
            'state' => 'State',
            'zip' => 'Zip / Postal Code',
            'city' => 'City',
            'website' => 'Corporate Website',
            'referrer' => 'Who referred you?',
            'payment_model' => 'Payment Model',
            'primary_category' => 'Primary Category',
            'comments' => 'Comments',
            'secondary_category' => 'Secondary Category',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'job_title' => 'Job Title',
            'work_phone' => 'Work Phone',
            'cell_phone' => 'Cell Phone',
            'email' => 'Email',
            'timezone' => 'Timezone',
            'payment_to' => 'Payment To',
            'currency' => 'Currency',
            'tax_class' => 'Tax Class',
            'ssn' => 'SSN / Tax ID'
        ];
    }

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([ 'info@'.$_SERVER['HTTP_HOST'] => $this->first_name])
            ->setReplyTo([$this->email => $this->first_name])
            ->setSubject('New publisher request')
            ->setTextBody("Name:".$this->first_name."\nCompany:".$this->company_name."\nEmail:".$this->email."\nPhone:".$this->work_phone."\n\n".$this->comments)
            ->send();
    }


}