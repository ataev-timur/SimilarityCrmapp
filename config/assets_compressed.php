<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2015-03-29 15:03:29
 */
return [
    'app\\assets\\AllAsset' => [
        'class' => 'app\\assets\\AllAsset',
        'basePath' => 'D:\\OpenServer\\domains\\crmapp\\web',
        'baseUrl' => '/',
        'js' => [
            'compiled-assets/all-f8538b12176d50f72f9d9248c9919fbb.js',
        ],
        'css' => [
            'compiled-assets/all-c500e53d35adb34cb762921d6518e6ff.css',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app\\assets\\AllAsset',
        ],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'app\\assets\\AllAsset',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'app\\assets\\AllAsset',
        ],
    ],
    'app\\assets\\ApplicationUiAssetBundle' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\bootstrap\\BootstrapAsset',
            'yii\\web\\YiiAsset',
            'app\\assets\\AllAsset',
        ],
    ],
    'yii\\widgets\\ActiveFormAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'app\\assets\\AllAsset',
        ],
    ],
    'yii\\grid\\GridViewAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'app\\assets\\AllAsset',
        ],
    ],
    'yii\\validators\\ValidationAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'app\\assets\\AllAsset',
        ],
    ],
];