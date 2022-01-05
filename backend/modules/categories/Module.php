<?php

namespace backend\modules\categories;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\categories\controllers';
    public $title =                     'Categories';
    public $addPageTitle =              'Add new category';
    public $editPageTitle =             'Edit category';
    public $addButtonTitle =            'Add category';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this category?';
    public $deleteSuccessText =         'Your category has been deleted.';
    public $deleteCancelText =          'Your category is safe :)';

    public function init()
    {
        parent::init();
    }
}

