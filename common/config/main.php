<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=' . \common\utils\BaseConfig::getConfig('Utils.Db.Host') .
                ';port=' . \common\utils\BaseConfig::getConfig('Utils.Db.Port') .
                ';dbname=' . \common\utils\BaseConfig::getConfig('Utils.Db.Name'),
            'username' => \common\utils\BaseConfig::getConfig('Utils.Db.User'),
            'password' => \common\utils\BaseConfig::getConfig('Utils.Db.Password'),
            'charset' => 'utf8',
            'schemaMap' => [
                'pgsql' => [
                    'class' => \yii\db\pgsql\Schema::class,
                    'defaultSchema' => 'public' //specify your schema here
                ]
            ],
        ],
    ],
];
