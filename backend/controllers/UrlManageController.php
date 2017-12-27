<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2017/12/27
 * @description:
 */
class UrlManageController extends Controller
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'contents';
        return true;
    }

    public function actionList()
    {
        return $this->render('list');
    }

    public function actionAdd()
    {
        return $this->render('add');
    }
}