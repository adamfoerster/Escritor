<?php
use kartik\markdown\MarkdownEditor;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <!-- <?=MarkdownEditor::widget([
        'name' => 'markdown',
        // 'value' => $value,
    ])?> -->

    <div class="jumbotron">
        <h1>Escritor</h1>

        <p class="lead">Este é um gerenciador de projetos de escrita.</p>
        <p>Administre seus projetos de escrita em repositórios Git separados. Com esta ferramenta você pode editar e commitar a partir de qualquer dispositivo usando arquivos Markdown.</p>
    </div>

    <?=GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            [
                'attribute' => 'projeto',
                'format' => 'raw',
                'value' => function($model){
                    return '<a href="'. Url::to('/projeto') . '?pasta=' . $model['Projeto'] .'">' . $model['Projeto'] . '</a>';
                }
            ],
        ],
    ]);?>

</div>
