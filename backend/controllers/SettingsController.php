<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2018/1/2
 * @description:
 */
class SettingsController extends Controller
{
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'settings';
        $this->view->params['tag_li'] = \Yii::$app->controller->id . '/' . \Yii::$app->controller->action->id;        return true;
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWatermark()
    {
        return $this->render('watermark');
    }

    public function actionStrFilterList()
    {
        return $this->render('list-str-filter');
    }
    public function actionStrFilterAdd()
    {
        return $this->render('add-str-filter');
    }

    public function actionAttachment()
    {
        return $this->render('attachment');
    }
}