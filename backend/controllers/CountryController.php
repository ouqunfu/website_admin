<?php

namespace backend\controllers;

use Codeception\Module\Yii2;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }


    public function actionCreate()
    {

    }

    public function actionList()
    {
        $data = Country::getOne();
        return $this->render('index', [
            'countries' => $data['countries'],
            'pagination' => $data['pagination'],
        ]);
    }

    /**
     * 测试w3.js接口
     */
    public function actionTest()
    {
        $arr = [
            'customers' => [
                [
                    "CustomerName" => "Ernst Handel",
                    "City" => "Graz",
                    "Country" => "Austria"
                ],
//                ["CustomerName" => "Galera del gastrnomo",
//                    "City" => "Barcelona",
//                    "Country" => "Spain"
//                ]
            ]
        ];
        $request = \Yii::$app->request;
        $data = $request->post();
        var_dump($data);
        echo json_encode($arr);
//        $txtAppModel = $_GET["model"];
//        var_dump($txtAppModel);die;
    }
}