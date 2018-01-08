<?php

namespace backend\common\controllers;

use backend\common\services\BaseService;
use backend\common\services\CommonUtil;
use backend\common\services\Constants;
use backend\services\LogService;
use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;

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

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * 权限检测
     * @return bool|string
     */
    protected function accessControl()
    {
        $user = Yii::$app->session->get('user');
        //super administrators role
        if (1 == intval($user['role_id'])) {
            return true;
        }
        $function = [
            'module' => Yii::$app->controller->module->id,
            'controller' => Yii::$app->controller->id,
            'action' => Yii::$app->controller->action->id,
            'status' => 'active'
        ];
        $baseService = new BaseService();
        $res = $baseService->accessControl($function);
        if (!$res) {
            return $this->renderJson(Constants::ERROR_ACCESS, 'Permission denied!');
        }
        return true;
    }

    /**
     * 登录过滤
     * @return bool|string
     */
    protected function loginFilter()
    {
        if (!Yii::$app->session->get('user')) {
            return $this->renderJson(Constants::ERROR_LOGIN, 'Not logged in!');
        }
        return true;
    }

    /**
     * 日志记录
     * @return bool
     */
    protected function logFilter()
    {
        $request = Yii::$app->request;
        if (!($request->isGet)) {
            $user = Yii::$app->session->get('user');
            $logData = [
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
            $logService->create($logData);
        }
        return true;
    }

    /**
     * api统一返回json格式方法
     * @param int $code
     * @param string $msg
     * @param array $data
     * @return string
     */
    public function renderJson($code = 200, $msg = "ok", $data = [])
    {
        //利用response，发送json格式数据
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $response->data = [
            "code" => $code,
            "msg" => $msg,
            "data" => $data,
        ];
        $response->send();
        exit();
    }
}