<?php

namespace backend\controllers;

use backend\common\controllers\BaseController;
use backend\services\LogService;
use backend\common\services\CommonUtil;

/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class LogController extends BaseController
{
    public function actionList()
    {
        $logService = new LogService();
        $data = $logService->lists();
        return $this->renderJson($data);
    }
}