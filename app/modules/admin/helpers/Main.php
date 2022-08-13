<?php

namespace app\modules\admin\helpers;

use Yii;

class Main
{
    public static function t($msg, $params= [], $language = null): string
    {
        return Yii::t('admin', $msg, $params, $language);
    }
}