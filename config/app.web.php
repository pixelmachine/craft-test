<?php

use craft\helpers\App;

return [
  'components' => [
    'session' => function() {
      $config = App::sessionConfig();
      $config['class'] = App::env('REDIS_ENABLED') ? yii\redis\Session::class : $config['class'];
      return Craft::createObject($config);
    },
  ],
];