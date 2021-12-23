<?php

namespace backend\modules\pages\models;

use Yii;
use common\models\WbpActiveRecord;

class Pages  extends WbpActiveRecord
{
    public static $imageTypes = ['page_img'];

    const ACTION = '/admin/pages';
    const TITLE = 'Pages';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%pages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','sub_title','description','href','view','seo_title','seo_keywords','seo_description'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
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

    public static function findByHref($href){
        return self::find()->where(['href'=>$href]);
    }
}