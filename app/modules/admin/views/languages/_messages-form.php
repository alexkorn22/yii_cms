<?php

use app\modules\admin\widgets\BoxGridView;
use yii\bootstrap4\Html;
use yii\bootstrap4\Modal;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SourceMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $languageCode string */
/* @var $form yii\widgets\ActiveForm */

$script = <<< JS
 $('button.btn-edit').click(function(){
        $('#editModal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
JS;

$this->registerJs($script, View::POS_READY);

?>

<?php
Modal::begin([
    'id' => 'editModal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
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
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $dataProvider) use ($languageCode) {
                        return Html::button('Edit', ['value' => Url::to(['message/update', 'id' => $dataProvider->id, 'lang' => $languageCode]),
                            'class' => 'btn btn-primary btn-edit',
                            'data-pjax' => '0']);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
