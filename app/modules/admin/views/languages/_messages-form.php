<?php

use app\modules\admin\widgets\BoxGridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SourceMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $languageCode string */
/* @var $form yii\widgets\ActiveForm */

?>

<h2>Translations</h2>
<div class="messages-table card">
    <?= BoxGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'category',
            'message:ntext',
            [
                'label' => 'Translation',
                'value' => 'languages.' . $languageCode,
                'filter' => '<input type="text" class="form-control" name="SourceMessageSearch[languages][' . $languageCode . ']">',
            ],
        ],
    ]); ?>
</div>
