<?php

namespace app\modules\admin\controllers;

use app\models\ActiveRecord;
use app\traits\controllers\FindModelOrFail;
use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Json;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

abstract class BaseRestController extends Controller
{
    use FindModelOrFail;

    protected function getPostData()
    {
        return Json::decode(Yii::$app->request->rawBody);
    }

    /**
     * @param $id
     * @return ActiveRecord
     * @throws InvalidConfigException
     * @throws NotFoundHttpException
     */
    protected function getModel($id = null)
    {
        if ($id) {
            return $this->findModel($id);
        }

        return Yii::createObject([
            'class' => $this->modelClass,
        ]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        return $model->delete();
    }
}