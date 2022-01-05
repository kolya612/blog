<?php

namespace backend\modules\articles;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\articles\controllers';
    public $title =                     'Articles';
    public $addPageTitle =              'Add new article';
    public $editPageTitle =             'Edit article';
    public $addButtonTitle =            'Add article';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this article?';
    public $deleteSuccessText =         'Your article has been deleted.';
    public $deleteCancelText =          'Your article is safe :)';

    public function init()
    {
        parent::init();
    }
}

