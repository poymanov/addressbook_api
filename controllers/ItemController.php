<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class ItemController extends ActiveController
{
    public $modelClass = 'app\models\Contact';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }

}