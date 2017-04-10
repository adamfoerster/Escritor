<?php
use yii\grid\GridView;
use yii\helpers\Url;

?>
<h1>Projeto: <?=$projeto?></h1>


<?=GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        [
            'attribute' => 'arquivo',
            'format' => 'raw',
            'value' => function($model, $projeto){
                return '<a href="'. Url::to('file') . '?name=' . urlencode($model['arquivo']) .'&project='.$model['project'].'">' . $model['arquivo'] . '</a>';
            }
        ],
    ],
]);?>
