<?php

namespace backend\modules\press\models;

use Yii;
use common\models\WbpActiveRecord;

class Press  extends WbpActiveRecord
{
    public static $imageTypes = ['press_listing_img','press_background'];
    const TAG = ['0' => '-- not chosen --', 1 => 'Company', 2 => 'EARNINGS'];

    const ACTION = '/admin/press';
    const TITLE = 'Press';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%press}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['title','seo_title','seo_description','seo_keywords','href'], 'string', 'max' => 250],
            [['content'], 'string'],
            [['tag','status'], 'integer']
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

    public function getLimitContent($size = 90)
    {
        $text = strip_tags($this->content);
        $text = str_replace('  ',' ',$text);
        return mb_substr($text,0,$size) . '...';
    }

    public static function getNextNews($date = 0, $limit = 1)
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->andWhere(['<','created_at',$date])->orderBy(['created_at' => SORT_DESC])->limit($limit)->all();
    }
}