<?php

namespace app\controllers;

use \yii\helpers\FileHelper;
use yii\data\ArrayDataProvider;

class ProjetoController extends \yii\web\Controller
{
    public function actionIndex($pasta)
    {
        $files = FileHelper::findFiles('escritos/'.$pasta);
        // echo '<pre>';print_r($files);exit;
        foreach ($files as $key => $arq) {
            $arq = explode('/', $arq);
            if ($arq[2] != '.git'){
                $arqs[$key]['arquivo'] = $arq[2];
                $arqs[$key]['project'] = $pasta;
            }
        }
        $provider = new ArrayDataProvider([
            'allModels' => $arqs,
            'pagination' => [
                'pageSize' => 10,
            ],
            // 'sort' => [
            //     'attributes' => ['id', 'name'],
            // ],
        ]);
        return $this->render('index', [
            'projeto' => $pasta,
            'provider' => $provider
        ]);
    }

}
