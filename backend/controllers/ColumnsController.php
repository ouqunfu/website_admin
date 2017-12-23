<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/23
 * Time: 16:13
 */
class ColumnsController extends Controller
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