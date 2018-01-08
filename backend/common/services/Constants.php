<?php

namespace backend\common\services;
/**
 * @author: qunfu
 * @date: 2018/1/5
 * @description:
 */
class Constants
{
    //pageSize
    const PAGE_SIZE = 50;

    //error code
    //1XX表示客户端的错误，2XX表示服务端的错误
    //1xx client error, 2xx server error
    const ERROR_OBJECT_NOT_EXIST = 100;
    const ERROR_STATUS_ERROR = 101;
    const ERROR_LOGIN = 102;
    const ERROR_PARAMS = 103;
    const ERROR_REPEAT = 104;
    const ERROR_SERVER = 200;
    const ERROR_ACCESS = 201;

    const ERROR_OK = 0;
}