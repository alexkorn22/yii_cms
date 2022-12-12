<?php

namespace app\widgets;

use app\modules\admin\controllers\LanguagesController;
use app\modules\admin\models\Language;
use Yii;
use yii\base\Widget;

class LanguageSwitcher extends Widget
{
    public bool $icon = false;

    public function run()
    {
        $languages = Language::find()
            ->select(['label', 'code'])
            ->where(['visible' => 1])
            ->orderBy('position')
            ->asArray()
            ->all();

        if (count($languages) > 1) {
            return $this->render('LanguageSwitcher/index', [
                'label' => LanguagesController::getLabelByCode(Yii::$app->language),
                'languages' => $languages,
                'icon' => $this->icon,
            ]);
        }
    }
}