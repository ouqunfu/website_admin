<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/23
 * Time: 16:13
 */
class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        return $this->render('list');
    }
}