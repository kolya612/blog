<?php

namespace backend\modules\tags;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\tags\controllers';
    public $title =                     'Tags';
    public $addPageTitle =              'Add new tag';
    public $editPageTitle =             'Edit tag';
    public $addButtonTitle =            'Add tag';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this tag?';
    public $deleteSuccessText =         'Your tag has been deleted.';
    public $deleteCancelText =          'Your tag is safe :)';

    public function init()
    {
        parent::init();
    }
}

