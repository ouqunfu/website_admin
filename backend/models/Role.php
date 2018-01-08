<?php

namespace backend\models;

use yii\db\ActiveRecord;

/**
 * @author: qunfu
 * @date: 2018/1/8
 * @description:
 */
class Role extends ActiveRecord
{
    /**
     * 查询单条记录
     * @param array $condition
     * @param array $field
     * @return array|null|ActiveRecord
     */
    public function getOne($condition = [], $field = [])
    {
        $data = self::find()->select($field)->where($condition)->asArray()->one();
        return $data;
    }
}