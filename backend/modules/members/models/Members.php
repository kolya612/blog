<?php

namespace backend\modules\members\models;

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

class Members  extends WbpActiveRecord implements IdentityInterface
{
    public static $imageTypes = ['member_logo'];
    public $password;

    public $new_password;

    const ACTION = '/admin/members';
    const TITLE = 'Member';
    const GENDER = [1 => 'Male', 2 => 'Female'];

    const SCENARIO_REGISTER_1='continue1';
    const SCENARIO_REGISTER_2='continue2';
    const SCENARIO_REGISTER_3='continue3';
    const SCENARIO_EDIT_PROFILE='edit';

    const WEIGHT_LOSS_GOAL=1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%members}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO, self::SCENARIO_EDIT_PROFILE]],
            [['email'], 'email'],
            [['new_password','invitation_code','first_name','last_name'], 'string', 'max' => 50],
            [['goal','gender','workout_often','status'], 'integer'],
            [['age'], 'integer','min' => 1,'max' => 120],
            [['goal_weight','weight'], 'double','min' => 50,'max' => 600],
            [['height'], 'double','min' => 1,'max' => 8],
            [['height_in'], 'double','min' => 0,'max' => 11],
            [['first_name','gender','age'], 'required','on' => [self::SCENARIO_REGISTER_1, self::SCENARIO_EDIT_PROFILE]],
            [['goal','workout_often'], 'required','on' => [self::SCENARIO_REGISTER_2, self::SCENARIO_EDIT_PROFILE]],
            [['height','height_in','weight','goal_weight'], 'required','on' => [self::SCENARIO_REGISTER_3, self::SCENARIO_EDIT_PROFILE]],

        ];
    }

    public function beforeSave($insert)
    {
        if($this->new_password){
            $this->setPassword($this->new_password);
        }
        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        if($this->scenario==self::SCENARIO_REGISTER_3 && $this->weight){
            $progress = Progress::findOne(['date'=>date("Y-m-d"),'member_id'=>Yii::$app->user->identity->id]);
            if(!$progress){
                $progress= new Progress();
                $progress->member_id=Yii::$app->user->identity->id;
                $progress->date=date("Y-m-d");
            }
            $progress->weight=$this->weight;
            $progress->save();
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function getName(){
        if($this->first_name || $this->last_name){
            return trim($this->first_name.' '.$this->last_name);
        }
        if($this->email) return $this->email;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'gender' =>'Gender',
            'age' =>'Age',
            'goal' =>'Goal',
            'workout_often' =>'Workout Often',
            'height' =>'Height (ft)',
            'height_in' =>'Height (in)',
            'weight' =>'Weight',
            'goal_weight' =>'Goal Weight',
        ];
    }

    public function getIdFnameLname()
    {
        return '(' . $this->id.'): '.$this->first_name.' '.$this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getGenderName()
    {
        if(!$this->gender) return '';
        return $this::GENDER[$this->gender];
    }

    public function getGoalTitle()
    {
        return Data::GOAL[$this->goal];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmailWithoutStatus($email)
    {
        return static::findOne(['email' => $email]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);

    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function getPassword(){
        return false;
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public function getMemeberPlans(){
        return $this->hasMany(MemberPlans::className(),['member_id'=>'id']);
    }

    public function getWorkoutPlans(){
        return $this->getMemeberPlans()->andWhere(['plan_type'=>MemberPlans::WORKOUT_PLAN])->orderBy('id desc');
    }

    public function getActiveWorkoutPlans(){
        return $this->getWorkoutPlans()->andWhere(['status'=>MemberPlans::STATUS_ACTIVE]);
    }

    public function getFreeWorkoutPlansSelectedLast30Days(){
        return $this->getWorkoutPlans()
            ->andWhere(['is_free'=>1])
            ->andWhere(['>','created_at',date("Y-m-d H:i:s",time()-30*24*3600)]);
    }

    public function getMealPlans(){
        return $this->getMemeberPlans()->andWhere(['plan_type'=>MemberPlans::MEAL_PLAN])->orderBy('id desc');
    }

    public function getActiveMealPlans(){
        return $this->getMealPlans()->andWhere(['status'=>MemberPlans::STATUS_ACTIVE]);
    }

    public function getFreeMealPlansSelectedLast30Days(){
        return $this->getMealPlans()
            ->andWhere(['is_free'=>1])
            ->andWhere(['>','created_at',date("Y-m-d H:i:s",time()-30*24*3600)]);
    }

    public function getMemeberProgress(){
        return $this->hasMany(Progress::className(),['member_id'=>'id']);
    }

    public function getLastProgress(){
        return $this->getMemeberProgress()->orderBy('date desc');
    }

    public function getLastProgressPhoto(){
        return $this->getLastProgress()->andWhere([
            'id'=>Image::find()
                ->andWhere(['type'=>Progress::$imageTypes])
                ->select('item_id')
        ]);
    }

    public function getRecomendedMealPlans(){
        return Meals::find()
            ->andWhere([
                'status'=>Meals::STATUS_ACTIVE,
                'goal'=>$this->goal,
                'gender'=>$this->gender
            ])
            ->andWhere(['not in','id',$this->getActiveMealPlans()->select('plan_id')]);
    }

    public function getRecomendedWorkoutPlans(){
        return Workouts::find()
            ->andWhere([
                'status'=>Workouts::STATUS_ACTIVE,
                'goal'=>Yii::$app->user->identity->goal,
                'gender'=>Yii::$app->user->identity->gender
            ])
            ->andWhere(['not in','id',$this->getActiveWorkoutPlans()->select('plan_id')]);
    }

    public function getRecomendedSupplements(){
        return Supplements::find()
            ->where(['status'=>Meals::STATUS_ACTIVE])
            ->andWhere([
                'goal'=>[Yii::$app->user->identity->goal,null],
                'gender'=>[Yii::$app->user->identity->gender,null],
            ]);
    }

    public function getMembersMealPlans(){
        return Meals::find()
            ->andWhere([
                'status'=>Meals::STATUS_ACTIVE,
            ])
            ->andWhere(['in','id',$this->getActiveMealPlans()->select('plan_id')]);
    }

    public function getMembersWorkoutPlans(){
        return Workouts::find()
            ->andWhere([
                'status'=>Workouts::STATUS_ACTIVE,
            ])
            ->andWhere(['in','id',$this->getActiveWorkoutPlans()->select('plan_id')]);
    }

    public function getFirstProgress(){
        return $this->getMemeberProgress()->orderBy('date');
    }

    public function getLastWeight(){
        $progress = $this->getLastProgress()->andWhere('weight IS NOT NULL')->one();

        if($progress) return $progress->weight;
        return false;
    }

    public function getLastWeightDiff(){
        $progress = $this->getLastProgress()->andWhere('weight IS NOT NULL')->limit(2)->all();
        if(isset($progress[0])) $progress1=$progress[0]->weight;
        if(isset($progress[1])) $progress2=$progress[1]->weight;

        if($progress1 && $progress2) return $progress1-$progress2;
        return false;
    }

    public function getLastFat(){
        $progress = $this->getLastProgress()->andWhere('fat IS NOT NULL')->one();

        if($progress) return $progress->fat;
        return false;
    }

    public function getLastFatDiff(){
        $progress = $this->getLastProgress()->andWhere('fat IS NOT NULL')->limit(2)->all();
        if(isset($progress[0])) $progress1=$progress[0]->fat;
        if(isset($progress[1])) $progress2=$progress[1]->fat;

        if($progress1 && $progress2) return $progress1-$progress2;
        return false;
    }

    public function getExercisesViewHistory()
    {
        return $this->hasMany(Exercises::className(), ['id' => 'exercise_id'])
            ->viaTable(MembersViewHistory::tableName(), ['member_id' => 'id']);
    }

    public function getWeightTrackersLabels($period=false){
        $trackers=$this->getMemeberProgress()->andWhere('weight IS NOT NULL')->orderBy('date');
        if($period) $trackers=$trackers->andWhere(['>=','date',date("Y-m-d", time()-$period*24*3600)]);
        $trackers=$trackers->all();
        $result=[];
        foreach ($trackers as $track){
            $result[]=date("M d",strtotime($track->date));
        }
        if(count($result)==1){
            $result[]=date("M d",strtotime($track->date));
        }
        if(!$result) return '';
        return "'".implode("','", $result)."'";
    }

    public function getWeightTrackersValuesArray($period=false){
        $trackers=$this->getMemeberProgress()->andWhere('weight IS NOT NULL')->orderBy('date');
        if($period) $trackers=$trackers->andWhere(['>=','date',date("Y-m-d", time()-$period*24*3600)]);
        $trackers=$trackers->all();
        if(!$trackers) return [];
        $result=[];
        foreach ($trackers as $track){
            $result[]=(int)$track->weight;
        }
        if(!$result) return [0];
        return $result;
    }

    public function getWeightTrackersValues($period=false){
        $tmp = $this->getWeightTrackersValuesArray($period);
        if(is_array($tmp)) return implode(",", $tmp);
        else return $tmp;
    }

    public function getTargetWeightTrackersValuesArray($period=false){
        $trackers=$this->getMemeberProgress()->andWhere('weight IS NOT NULL')->orderBy('date');
        if($period) $trackers=$trackers->andWhere(['>=','date',date("Y-m-d", time()-$period*24*3600)]);
        $trackers=$trackers->all();
        if(!$trackers) return [(int)$this->goal_weight,(int)$this->goal_weight];
        $result=[];
        foreach ($trackers as $track){
            $result[]=(int)$this->goal_weight;
        }
        if(count($result)==1){
            $result[]=(int)$this->goal_weight;
        }
        if(!$result) return [0];
        return $result;
    }

    public function getTargetWeightTrackersValues($period=false){
        $tmp = $this->getTargetWeightTrackersValuesArray($period);
        if(is_array($tmp)) return implode(",", $tmp);
        else return $tmp;
    }

    public function getTotalGainsLosses()
    {
        $members_progress = $this->getMemeberProgress()->orderBy('date desc')->limit(2)->all();
        if(count($members_progress)>1) {
            $weight = $members_progress[0]->weight - $members_progress[1]->weight;
            if($weight>0) {
                return array(
                    'title' => 'Gains',
                    'value' => $weight . ' <small>lbs</small>'
                );
            } else if($weight == 0) {
                return array(
                    'title' => 'Gains / Losses',
                    'value' => 0
                );

            } else {
                return array(
                    'title' => 'Losses',
                    'value' => abs($weight) . ' <small>lbs</small>'
                );
            }
        } else {
            return array(
                'title' => 'Gains / Losses',
                'value' => 0
            );
        }
    }
}