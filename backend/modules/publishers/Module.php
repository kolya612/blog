<?php

namespace backend\modules\publishers;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\publishers\controllers';
    public $title =                     'Publishers';
    public $addPageTitle =              'Add new request';
    public $editPageTitle =             'Edit publishers';
    public $addButtonTitle =            'Add request';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this publisher?';
    public $deleteSuccessText =         'Your publisher has been deleted.';
    public $deleteCancelText =          'Your publisher is safe :)';


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

