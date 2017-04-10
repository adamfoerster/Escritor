<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'escritor',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'kCJ-vxCsMGHweOLhqkuRJ3di6M6Z93WK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
		    'class' => 'yii\web\UrlManager',
		    'showScriptName' => false,
			'enablePrettyUrl' => true,
			'rules' => [
                '<controller:\w+>/<id:\d+>'             => '<controller>/view',
                '<controller:\w+>/<action>/<id:\d+>'    => '<controller>/<action>',
			    '<controller:[\w-]+>/<action>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'         => '<controller>/<action>',
				'<controller:[\w-]+>/update/<id:\d+>'   => '<controller>/update',
				'<controller:[\w-]+>/delete/<id:\d+>'   => '<controller>/delete',
    			'<controller:[\w-]+>/<id:\d+>'          => '<controller>/view',
			],
		],
    ],
    'params' => $params,
    'modules' => [
        'markdown' => [
            // the module class
            'class' => 'kartik\markdown\Module',

            // the controller action route used for markdown editor preview
            'previewAction' => '/markdown/parse/preview',

            // the controller action route used for downloading the markdown exported file
            'downloadAction' => '/markdown/parse/download',

            // the list of custom conversion patterns for post processing
            'customConversion' => [
                '<table>' => '<table class="table table-bordered table-striped">'
            ],

            // whether to use PHP SmartyPantsTypographer to process Markdown output
            'smartyPants' => true,

            // array the the internalization configuration for this module
            // 'i18n' => [
            //     'class' => 'yii\i18n\PhpMessageSource',
            //     'basePath' => '@markdown/messages',
            //     'forceTranslation' => true
            // ],
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
