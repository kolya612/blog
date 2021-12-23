<?php

namespace backend\modules\contact;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\contact\controllers';
    public $title =                     'Contact';
    public $addPageTitle =              'Add new request';
    public $editPageTitle =             'Edit contact';
    public $addButtonTitle =            'Add request';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this contact?';
    public $deleteSuccessText =         'Your contact has been deleted.';
    public $deleteCancelText =          'Your contact is safe :)';


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

