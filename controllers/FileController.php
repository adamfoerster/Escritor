<?php

namespace app\controllers;

use Yii;
use \yii\helpers\FileHelper;

class FileController extends \yii\web\Controller
{
    public function actionIndex($name, $project)
    {
        $text = file_get_contents('escritos/'.$project.'/'.$name);
        return $this->render('index', [
            'name' => $name,
            'value' => $text
        ]);
    }

}
