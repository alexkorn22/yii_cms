<?php

namespace app\services;

use app\modules\admin\models\Language;

class LanguageService {
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
}