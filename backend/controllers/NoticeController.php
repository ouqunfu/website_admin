<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2017/12/29
 * @description:
 */
class NoticeController extends Controller
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'functions';
        $this->view->params['tag_li'] = \Yii::$app->controller->id . '/' . \Yii::$app->controller->action->id;        return true;
    }

    public function actionListNotice()
    {
        return $this->render('list-notice');
    }

    public function actionAddNotice()
    {
        return $this->render('add-notice');
    }

    public function actionListMessage()
    {
        return $this->render('list-message');
    }
}