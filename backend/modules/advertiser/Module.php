<?php

namespace backend\modules\advertiser;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\advertiser\controllers';
    public $title =                     'Advertisers';
    public $addPageTitle =              'Add new request';
    public $editPageTitle =             'Edit advertiser';
    public $addButtonTitle =            'Add advertiser';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this advertiser?';
    public $deleteSuccessText =         'Your advertiser has been deleted.';
    public $deleteCancelText =          'Your advertiser is safe :)';


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

