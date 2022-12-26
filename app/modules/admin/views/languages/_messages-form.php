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

$editScript = <<< JS
 $('button.btn-edit').click(function(){
        $('#editModal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
    });
JS;

$toggleScript = <<< JS
 $('[type="checkbox"]#toggleMessages').on('change', function(){
   if($(this).is(':checked')) {
    $('.messages-table').addClass('onlyEmpty'); 
   } else {
    $('.messages-table').removeClass('onlyEmpty');
   }
 });
JS;

$tableCss = <<< CSS
.onlyEmpty tr.filled {
   display: none;
}
CSS;


$this->registerCss($tableCss);
$this->registerJs($editScript, View::POS_READY);
$this->registerJs($toggleScript, View::POS_READY);

?>

<?php
Modal::begin([
    'id' => 'editModal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>

<div class="d-flex justify-content-between align-items-center">
    <h2>Translations</h2>
    <label for="toggleMessages">
        <?= Html::checkbox(null, false, ['id' => 'toggleMessages']) ?>
        Show messages without translations only
    </label>
</div>
<div class="messages-table card">
    <?= BoxGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model) use ($languageCode) {
            if (!empty($model->languages[$languageCode])) {
                return [
                    'class' => 'filled'
                ];
            }
        },
        'columns' => [
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
