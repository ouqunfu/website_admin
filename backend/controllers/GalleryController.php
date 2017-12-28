<?php
namespace backend\controllers;
use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2017/12/28
 * @description:
 */
class GalleryController extends Controller
{
    public function beforeAction($action)
    {
        parent::beforeAction($action); // TODO: Change the autogenerated stub
        $this->view->params['tag'] = 'contents';
        return true;
    }
    public function actionListDir()
    {
        return $this->render('list-dir');
    }

    public function actionListImg()
    {
        return $this->render('list-img');
    }
}