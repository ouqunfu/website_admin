<?php

namespace backend\common\services;
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
}