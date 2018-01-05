<?php

namespace backend\controllers;

use backend\common\controllers\BaseController;

/**
 * @author: qunfu
 * @date: 2017/12/28
 * @description:
 */
class UsersController extends BaseController
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'users';
        $this->view->params['tag_li'] = \Yii::$app->controller->id . '/' . \Yii::$app->controller->action->id;
        return true;
    }

    public function actionLogin()
    {
        echo 'action-login';
        die;
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