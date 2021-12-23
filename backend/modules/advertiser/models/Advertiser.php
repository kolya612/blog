<?php

namespace backend\modules\advertiser\models;

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

class Advertiser  extends WbpActiveRecord
{
    const SCENARIO_FRONTEND='frontend';

    public $agree;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%advertisers}}';
    }

    public static function getPricingModels(){
        return [
            1=>'Test',
            2=>'Test2',
        ];
    }
    public static function getDirectAdvertisers(){
        return [
            1=>'Yes',
            2=>'No',
        ];
    }

    public static function getMarkets(){
        return [
            1=>'Market1',
            2=>'Market2',
        ];
    }
    public static function getTrafficTypes(){
        return [
            1=>'Type1',
            2=>'Type2',
        ];
    }

    public function getPricingModelTitle(){
        if(!$this->pricing_model) return false;
        return self::getPricingModels()[$this->pricing_model];
    }

    public function getDirectAdvertisersTitle(){
        if(!$this->direct_advertiser) return false;
        return self::getDirectAdvertisers()[$this->direct_advertiser];
    }

    public function getMarketTitle(){
        if(!$this->market) return false;
        return self::getMarkets()[$this->market];
    }

    public function getTrafficTypeTitle(){
        if(!$this->traffic_type) return false;
        return self::getTrafficTypes()[$this->traffic_type];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['first_name','last_name','company','email','skype','telegram','pricing_model','budget','product_name','market','traffic_type','product_link','direct_advertiser'],'safe','on'=>[self::ADMIN_ADD_SCENARIO,self::ADMIN_EDIT_SCENARIO]],
            [['agree', 'first_name','last_name','company','email','skype','telegram','pricing_model','budget','product_name','market','traffic_type','product_link','direct_advertiser'],'required','on'=>[self::SCENARIO_FRONTEND]],
            ['agree','required','on'=>self::SCENARIO_FRONTEND,'requiredValue' => 1,'message'=>'Please agree terms and conditions']
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name'=>'First Name',
            'last_name'=>'Last Name',
            'company'=>'Company',
            'email'=>'Email Address',
            'skype'=>'Skype ID',
            'telegram'=>'Telegram ID',
            'pricing_model'=>'Pricing Model',
            'budget'=>'Budget To Spend With Us',
            'product_name'=>'Name of your Product/Service',
            'market'=>'Market Niche',
            'traffic_type'=>'Type Of Traffic Searched',
            'product_link'=>'Link To Your Product',
            'direct_advertiser'=>'Direct Advertiser?',
            'agree'=>'Please agree terms and conditions'
        ];
    }

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([ 'info@'.$_SERVER['HTTP_HOST'] => $this->first_name])
            ->setReplyTo([$this->email => $this->first_name])
            ->setSubject('New advertiser request')
            ->setTextBody("Name:".$this->first_name."\nCompany:".$this->company."\nEmail:".$this->email."\nMarket:".$this->getMarketTitle()."\n\n".$this->product_name)
            ->send();
    }

}