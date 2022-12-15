<?php

namespace app\services;

use app\modules\admin\models\Language;
use yii\helpers\ArrayHelper;

class LanguageService
{
    public static function getLabelByCode($code)
    {
        $result = Language::find()->select(['label'])->where(['code' => $code])->asArray()->one();

        if (isset($result['label'])) {
            return $result['label'];
        }

        return "";
    }

    public static function getCodes(): array
    {
        return Language::find()->select('code')->column();
    }

    public static function getLanguageOptions(): array
    {
        $result = Language::find()->select(['name', 'code'])->asArray()->all();

        return ArrayHelper::map($result, 'code', 'name');
    }
}