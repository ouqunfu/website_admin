<?php

namespace backend\models;

use backend\common\services\Constants;
use yii\data\Pagination;
use yii\db\ActiveRecord;


/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class Log extends ActiveRecord
{
    /**
     * 添加数据
     * @param array $data
     * @return bool
     */
    public function create($data = [])
    {
        $res = $this->insert($data);
        return $res;
    }

    public function listsAll()
    {
        $data = self::find()->asArray()->all();
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
        $query = self::find();
        $pagination = new Pagination([
            'defaultPageSize' => Constants::PAGE_SIZE,
            'totalCount' => $query->count(),
        ]);
        $data['list'] = $query->where($condition)->groupBy($groupBy)->orderBy($orderBy)->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();
        $data['totalCount'] = $pagination->totalCount;
        $data['pageCount'] = ceil($pagination->totalCount / Constants::PAGE_SIZE);
        return $data;
    }
}