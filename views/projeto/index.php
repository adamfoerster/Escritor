<?php
use yii\grid\GridView;
?>
<h1>projeto/index</h1>


<?=GridView::widget([
    'dataProvider' => $provider,
    // 'columns' => [
    //     [
    //         'attribute' => 'projeto',
    //         'format' => 'raw',
    //         'value' => function($model){
    //             return '<a href="'. Url::to('projetos/index') . '?pasta=' . $model['Projeto'] .'">' . $model['Projeto'] . '</a>';
    //         }
    //     ],
    // ],
]);?>
