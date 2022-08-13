<?php

namespace app\modules\admin\controllers;

use app\models\activeRecord\MenuItem;
use app\traits\controllers\FindModelOrFail;
use Yii;
use app\models\activeRecord\Menu;
use app\models\search\MenuSearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
{
    use FindModelOrFail;

    public function init()
    {
        parent::init();

        $this->modelClass = Menu::class;
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                    'edit-item' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Menu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionEditItem($id)
    {
        $request = Yii::$app->request;
        $menu = $this->findModel($id);
        $itemId = $request->post('itemId');

        if ($itemId) {
            $model = MenuItem::findOne($itemId);
            if (!$model) {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        } else {
            $model = new MenuItem();
        }

        $model->load($request->post());
        $model->menu_id = $menu->id;
        $parentId = ArrayHelper::getValue($request->post('MenuItem'), 'parentId');

        if ($parentId && $parent = MenuItem::findOne($parentId)) {
            $model->appendTo($parent);
        }

        return $this->redirect(['update', 'id' => $menu->id]);
    }
}
