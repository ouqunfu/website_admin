<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2017/12/26
 * @description:
 */
class SubjectsController extends Controller
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