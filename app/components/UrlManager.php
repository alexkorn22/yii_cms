<?php

namespace app\components;

use app\modules\admin\models\Language;

class UrlManager extends \codemix\localeurls\UrlManager {
    public function init() {
        $codes = Language::find()->select('code')->orderBy('position')->column();

        if (!in_array(\Yii::$app->language, $codes)) {
            array_unshift($codes, \Yii::$app->language);
        }

        $this->languages = $codes;

        parent::init();
    }
}