<?php

namespace backend\modules\brands\models;

use Yii;
use common\models\WbpActiveRecord;

class Brands  extends WbpActiveRecord
{
    public static $imageTypes = [
        'brand_listing_img',
        'brand_listing_big_img',
        'brand_listing_background',
        'brand_logo',
        'brand_background',
        'brand_1',
        'brand_2',
        'brand_3',
        'brand_listing_big_img_hover',
    ];

    const ACTION = '/admin/brands';
    const TITLE = 'Brands';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%brands}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_name'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['brand_name','url','title','seo_title','seo_description','seo_keywords','href'], 'string', 'max' => 250],
            [['description','content'], 'string'],
            [['status','visible'], 'integer']
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

    public static function getAllActiveBrands(){
        return self::find()->where(['status' => self::STATUS_ACTIVE])->orderBy('sort')->all();
    }

    public static function getMainBrands(){
        return self::find()->where(['status' => self::STATUS_ACTIVE, 'visible'=>1])->orderBy('sort')->all();
    }
}