<?php

namespace backend\controllers;

use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2018/1/3
 * @description:
 */
class MarketController extends Controller
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'market';
        return true;
    }

    public function actionListLinks()
    {
        return $this->render('list-links');
    }

    public function actionAddLinks()
    {
        return $this->render('add-links');
    }

    public function actionListLinksCato()
    {
        return $this->render('list-links-cato');
    }

    public function actionAddLinksCato()
    {
        return $this->render('add-links-cato');
    }
}