<?php

namespace backend\controllers;

use backend\services\LogService;
use backend\common\services\CommonUtil;
use yii\web\Controller;

/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class LogController extends Controller
{
    public function actionList()
    {
        $logService = new LogService();
        $data = $logService->lists();
        CommonUtil::dump($data);
        die;
        return $data;
    }
}