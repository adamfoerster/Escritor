<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Projeto extends Model
{
    public $pasta;
    public $arquivos;
    public $alterado;
    private $repositorio;

    public function rules()
    {
        return [
            [['pasta'], 'required'],
            [['arquivos','alterado','repositorio'], 'safe'],
        ];
    }
}
