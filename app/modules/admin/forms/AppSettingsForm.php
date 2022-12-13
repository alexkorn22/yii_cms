<?php

namespace app\modules\admin\forms;

use justcoded\yii2\settings\forms\AppSettingsForm as AppSettingsFormMain;
use yii\helpers\ArrayHelper;

class AppSettingsForm extends AppSettingsFormMain
{
    public $adminLanguage = 'ru';
    public $siteLanguage = 'ru';

    public function rules(): array
    {
        return ArrayHelper::merge(parent::rules(), [
            ['adminLanguage', 'string'],
            ['siteLanguage', 'string'],
        ]);
    }

    public function attributeLabels(): array
    {
        return ArrayHelper::merge(parent::attributeLabels(), [

        ]);
    }
}