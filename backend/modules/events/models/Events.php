<?php

namespace backend\modules\events\models;

use Yii;
use common\models\WbpActiveRecord;

class Events  extends WbpActiveRecord
{
    public static $imageTypes = ['event_listing_img','event_background'];

    const ACTION = '/admin/events';
    const TITLE = 'Events';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%events}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['date','place','seo_title','seo_description','seo_keywords','href'], 'string', 'max' => 250],
            [['content'], 'string'],
            [['status'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public static function getNextEvents($date = 0, $limit = 2)
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->andWhere(['<','created_at',$date])->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
    }
}