<?php

namespace backend\common\services;

use backend\models\Functions;
use backend\models\Role;
use Yii;
use yii\base\InvalidRouteException;

/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class BaseService
{
    /**
     * 赋值到model实例的属性
     * @param $model
     * @param array $data
     * @return mixed
     */
    public function bindAttributes($model, $data = [])
    {
        if (is_array($data)) {
            foreach ($data as $name => $value) {
                $model->$name = $value;
            }
        }
        return $model;
    }

    /**
     * 访问权限验证
     * @param array $function
     * @return bool
     */
    public function accessControl(array $function = [])
    {
        if ($function) {
            $res = (new Functions())->getOne($function, ['function_id']);
            $user = Yii::$app->session->get('user');
            $roleCondition = [
                'status' => 'active',
                'role_id' => $user['role_id']
            ];
            $role = (new Role())->getOne($roleCondition, ['role_rule']);
            $roleIds = explode(',', $role['role_rule']);
            if ($res && $roleIds && in_array($res['function_id'], $roleIds)) {
                return true;
            }
        }
        return false;
    }
}