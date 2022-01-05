<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'homeUrl' => '/',
    'components' => [
        'request' => [
            'class'=>'wbp\lang\LangRequest',
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class'=>'wbp\urlManager\UrlManager',
            'ruleConfig'=>['class'=>'\wbp\urlManager\UrlRule'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'auth'=>'auth/auth',
//                'contact'=>'contact/index',
                'press'=>'press/index',
                'press/<href>'=>'press/news',
//                'brands'=>'brands/index',
//                'brands/<href>'=>'brands/brand',
//                'events'=>'events/index',
//                'events/<href>'=>'events/event',
                '<href>'=>'site/generic-page',
            ],

        ],
        'lang' => [
            'class'=>'wbp\lang\Lang',
            'languages'=>[
                'en_US'=>'',
//                'en_US'=>'en',
//                'uk_UA'=>'ua',
            ],
            'languagesUrls'=>[
                'en_US'=>'',
//                'en_US'=>'en',
//                'uk_UA'=>'uk',
            ],
        ],
        'i18n'=>array(
            'translations' => array(
                '*'=>array(
                    'class' => 'wbp\lang\PhpMessageSource',
                    'develop'=>true,
                    'basePath' => "@app/messages",
                    'sourceLanguage' => 'en_US',
                    'fileMap' => array(
                    )
                ),
            )
        ),
		'formatter' => [
			'class' => 'yii\i18n\Formatter',
			'nullDisplay' => '-',
			'dateFormat' => 'd/M/Y',
			'datetimeFormat' => 'd-M-Y H:i:s',
			'timeFormat' => 'H:i:s',
		],

    ],
    'language' => 'en_US',
    'sourceLanguage' => 'en_US',
    'params' => $params,
	'aliases' => [
		'@keygenqt/ImageAjax/ImageAjax' => '@vendor/keygenqt/yii2-image-ajax/ImageAjax',
		'@keygenqt/imageAjax/assets' => '@vendor/keygenqt/yii2-image-ajax/assets',
		'@keygenqt/imageAjax/views/view' => '@vendor/keygenqt/yii2-image-ajax/views/view',
	],
];
