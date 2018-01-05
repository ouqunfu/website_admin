<?php

namespace backend\common\controllers;

use backend\common\services\CommonUtil;
use backend\models\Log;
use backend\services\LogService;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class BaseController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['login', 'logout', 'error'],
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            $this->loginFilter();
                            $this->accessControl();
                            $this->logFilter();
                            return true;
                        }
                    ],
                ],
            ],
        ];
    }

    protected function accessControl()
    {
        echo 'accessControl';
        die;
    }

    protected function loginFilter()
    {
        echo 'loginFilter';
        die;
    }

    protected function logFilter()
    {
        $request = Yii::$app->request;
        if (($request->isGet)) {
            echo 'ddd';
            $user = Yii::$app->session->get('user');
            $log = [
                'log_type' => Yii::$app->controller->module->id . '/' . Yii::$app->controller->id . '/' . Yii::$app->controller->action->id,
                'request_method' => $request->method,
                'action_function' => Yii::$app->controller->action->id,
                'action_param' => json_encode($request->bodyParams),
                'user_id' => $user['user_id'],
                'user_name' => $user['user_name'],
                'create_time' => time(),
                'action_device' => isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '',
                'action_ip' => CommonUtil::getClientIP()
            ];
            $logService = new LogService();
            $logService->create($log);
        }

        return;
    }
}