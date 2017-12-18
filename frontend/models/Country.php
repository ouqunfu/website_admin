<?php

namespace app\models;

use yii\data\Pagination;
use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function getOne()
    {
        $query = self::find();

        $data['pagination'] = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $data['countries'] = $query->orderBy('name')
            ->offset($data['pagination']->offset)
            ->limit($data['pagination']->limit)
            ->all();

        return $data;
    }
}