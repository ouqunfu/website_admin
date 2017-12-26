<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2017/12/25
 * @description:
 */
class CatoController extends Controller
{
    public function actionList()
    {
        return $this->render('list');
    }

    public function actionAdd()
    {
        return $this->render('add');
    }
}