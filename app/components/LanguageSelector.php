<?php

namespace app\components;

use yii\base\BootstrapInterface;

class LanguageSelector implements BootstrapInterface
{
    public string $defaultLanguage;

    public function bootstrap($app)
    {
        $sqlCommand = $app
            ->getDb()
            ->createCommand("SELECT CONVERT(value USING utf8) as value FROM `settings` WHERE `key` = 'siteLanguage'");
        $result = $sqlCommand->queryOne();

        if (isset($result['value'])) {
            $value = unserialize($result['value']);
            $app->language = $value;
        } else {
            $app->language = $this->defaultLanguage;
        }
    }
}