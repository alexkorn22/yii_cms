<?php

namespace app\components\bootstraps;

use yii\base\BootstrapInterface;

class PageBootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            [
                'class' => '\app\components\url_rules\PageUrlRule'
            ]
        ], false);
    }
}