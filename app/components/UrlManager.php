<?php

namespace app\components;

use app\modules\admin\models\Language;

class UrlManager extends \codemix\localeurls\UrlManager {
    public function init() {
        $codes = Language::find()->select('code')->where(['visible' => 1])->column();

        $this->languages = $codes;

        parent::init();
    }
}