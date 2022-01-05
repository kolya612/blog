<?php

namespace backend\modules\articles\models;

use common\models\WbpActiveRecord;

class ArticlesTags extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%articles_tags}}';
    }
}
