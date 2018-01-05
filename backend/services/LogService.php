<?php

namespace backend\services;

use backend\common\services\BaseService;
use backend\models\Log;

/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class LogService extends BaseService
{
    /**
     * 添加数据
     * @param array $data
     * @return bool
     */
    public function create($data = [])
    {
        $logModel = new Log();
        $res = $logModel->create($data);
        return $res;
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function listsAll()
    {
        $logModel = new Log();
        $data = $logModel->listsAll();
        return $data;
    }

    /**
     * 分页条件查询
     * @param array $condition
     * @param array $groupBy
     * @param string $orderBy
     * @return mixed
     */
    public function lists($condition = [], $groupBy = [], $orderBy = '')
    {
        $logModel = new Log();
        $data = $logModel->lists($condition, $groupBy, $orderBy);
        return $data;
    }
}