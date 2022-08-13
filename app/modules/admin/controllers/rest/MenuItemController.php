<?php

namespace app\modules\admin\controllers\rest;

use app\models\activeRecord\MenuItem;
use app\modules\admin\controllers\BaseRestController;
use app\traits\controllers\FindModelOrFail;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\HttpException;

class MenuItemController extends BaseRestController
{
    public function init()
    {
        parent::init();

        $this->modelClass = MenuItem::class;
    }

    public function actionGetList($menuId): array
    {
        return MenuItem::find()
            //->select('id, name, depth')
            //->where(['NOT IN', 'id', $children])
            ->andWhere(['menu_id' => $menuId])
            ->orderBy('lft, position')
            ->all();
    }

    public function actionEdit($id = null)
    {
        /** @var MenuItem $model */
        $model = $this->getModel($id);
        $data = $this->getPostData();
        $model->load($data, '');
        $parentId = ArrayHelper::getValue($data, 'parentId');
        $menuId = ArrayHelper::getValue($data, 'menu_id');
        if ($model->getParentId() != $parentId) {
            if ($parentId) {
                $parent = MenuItem::findOne($parentId);
            } else {
                $parent = MenuItem::findOne(['menu_id' => $menuId, 'depth' => 0]);
            }
            $model->appendTo($parent);
        } else {
            $model->save();
        }

        return $model;
    }
}