<?php

namespace backend\modules\articles\models;

use backend\modules\tags\models\Tags;
use Yii;
use common\models\WbpActiveRecord;

class Articles  extends WbpActiveRecord
{
    public static $imageTypes = ['article_img'];

    const ACTION = '/admin/articles';
    const TITLE = 'Articles';

    protected $linkParams=[
        'tags_ids'=>[
            'class'=>'\backend\modules\articles\models\ArticlesTags',
            'param_id'=>'tag_id',
            'model_id'=>'article_id'
        ]
    ];

    public $tags_ids;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%articles}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','content','href','seo_title','seo_keywords','seo_description'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['category_id','status','viewed'], 'integer'],
            [['tagsIds'],'safe']
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

    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
            ->viaTable(ArticlesTags::tableName(), ['article_id' => 'id']);
    }

    public function getTagsIds()
    {
        $this->tags_ids = $this->getTags()->all();

        if($this->tags_ids) return $this->tags_ids;
        $result=[];
        $tags = $this->getTags()->all();
        foreach ($tags as $tag){
            $result[]=$tags->id;
        }
        $this->tags_ids=$result;
        return $this->tags_ids;
    }

    public function setTagsIds($value)
    {
        $this->tags_ids = $value;
    }


    public function getArticlesTags()
    {
        return $this->hasMany(ArticlesTags::className(), ['article_id' => 'id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        ArticlesTags::deleteAll(['article_id' => $this->id]);

        if (!empty($this->tags_ids)) {



            foreach ($this->tags_ids as $tag_id) {
                $newModel = NEW ArticlesTags();
                $newModel->article_id = $this->id;
                $newModel->tag_id = $tag_id;

                $newModel->save();
            }
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function afterDelete()
    {
        ArticlesTags::deleteAll(['article_id' => $this->id]);

        parent::afterDelete();
    }

}