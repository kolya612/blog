<?php

namespace backend\modules\faq;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\faq\controllers';
    public $title =                     'FAQ';
    public $addPageTitle =              'Add new FAQ';
    public $editPageTitle =             'Edit FAQ';
    public $addButtonTitle =            'Add FAQ';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this FAQ?';
    public $deleteSuccessText =         'Your FAQ has been deleted.';
    public $deleteCancelText =          'Your FAC is safe :)';


    public function init()
    {
        parent::init();
    }

    public static $module_actions = [
        'index' => [
            [
                'controller' => 'default',
                'action' => 'index'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
            ]
        ],
        'add' => [
            [
                'controller' => 'default',
                'action' => 'add'
            ],
            [
                'controller' => 'default',
                'action' => 'uploadImage'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
            ]
        ],
        'edit' => [
            [
                'controller' => 'default',
                'action' => 'edit'
            ],
            [
                'controller' => 'default',
                'action' => 'uploadImage'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
            ]
        ],
        'delete' => [
            [
                'controller' => 'default',
                'action' => 'delete'
            ]
        ]
    ];
}

