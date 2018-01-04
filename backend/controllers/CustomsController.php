<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2018/1/3
 * @description:
 */
class CustomsController extends Controller
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'customs';
        return true;
    }

    public function actionListContentField()
{
    return $this->render('list-content-field');
}

    public function actionAddContentField()
    {
        return $this->render('add-content-field');
    }

    public function actionListUserField()
    {
        return $this->render('list-user-field');
    }

    public function actionAddUserField()
    {
        return $this->render('add-user-field');
    }
}