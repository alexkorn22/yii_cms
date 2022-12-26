<?php

namespace app\modules\admin;

use app\services\LanguageService;
use Yii;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = 'main';

    /**
     * @inheritdoc
     */
    public $defaultRoute = 'dashboard';

    public $messages_grid_column = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // configure module.
        Yii::configure($this, require(__DIR__ . '/config/main.php'));

        // reconfigure service container.
        Yii::configure(Yii::$container, require(__DIR__ . '/config/container.php'));

        if (in_array(Yii::$app->settings->app->adminLanguage, LanguageService::getCodes())) {
            Yii::$app->language = Yii::$app->settings->app->adminLanguage;
        }

        // set bootstrap version to 4 for Kartik widgets.
        Yii::$app->params['bsVersion'] = 4;

        // change error action to match admin styles.
        Yii::$app->errorHandler->errorAction = 'admin/dashboard/error';

        $this->messages_grid_column = $this->getMessagesGridColumns();
    }

    public function getMessagesGridColumns()
    {
        $columns = [
            ['class' => 'yii\grid\SerialColumn'],
            'category',
            'message:ntext'
        ];

        foreach (['ua'] as $one) {
            $columns[] = [
                'label' => $one,
                'value' => 'languages.' . $one,
                'filter' => '<input type="text" class="form-control" name="SourceMessageSearch[languages][' . $one . ']">',
            ];
        }

        $columns[] = ['class' => 'yii\grid\ActionColumn'];

        return $columns;
    }
}
