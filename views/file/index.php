<?php
use kartik\markdown\MarkdownEditor;
use yii\web\view;
/* @var $this yii\web\View */
?>
<h3>
    Projeto: <?=$project?>
</h3>
<h1><?=$name?></h1>
<?=MarkdownEditor::widget([
    'name' => 'markdown',
    'value' => $value
])?>

<?php
$this->registerJsFile('js/file.js', View::POS_READY);
