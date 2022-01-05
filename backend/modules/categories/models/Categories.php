<?php

namespace backend\modules\categories\models;

use Yii;
use common\models\WbpActiveRecord;

class Categories  extends WbpActiveRecord
{
    public static $imageTypes = ['category_img'];

    const ACTION = '/admin/categories';
    const TITLE = 'Categories';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','content','href','seo_title','seo_keywords','seo_description'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['parent_id','status','sort'], 'integer']
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

    public static function findByHref($href)
    {
        return self::find()->where(['href'=>$href]);
    }

    public function getParent()
    {
        $model = self::find()->where(['id'=>$this->parent_id])->one();

        return $model->title;
    }
}