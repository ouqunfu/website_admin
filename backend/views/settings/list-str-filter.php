<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addCss($this,'@web/frontend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    敏感词管理
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 设置</li>
    <li class="active"><a href="<?php echo Url::toRoute('settings/str-filter-list');?>">敏感词管理</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <div id="contents-column-list-info" class="dataTables_wrapper dt-bootstrap">
            <div class="row">
              <div class="col-sm-4 col-md-1">
                <a href="<?php echo Url::toRoute('settings/str-filter-add');?>">
                  <button type="button" class="btn btn-block btn-primary">添加敏感词</button>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"><p></p></div>
            </div>
            <div class="row">
              <div class="col-sm-12 table-responsive">
                <table id="contents-column-list" class="table table-bordered table-hover dataTable" role="grid">
                  <thead>
                  <tr role="row">
                    <th width="5%">
                      <input title="点击全选本页的所有项目" type="checkbox">
                    </th>
                    <th width="10%">
                      ID
                    </th>
                    <th width="25%">
                      敏感词
                    </th>
                    <th width="25%">
                      替换词
                    </th>
                    <th width="10%">
                      敏感级别
                    </th>
                    <th width="20%">
                      操作
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td><input type="checkbox"></td>
                    <td>1</td>
                    <td>Gecko</td>
                    <td>1.7</td>
                    <td>一般</td>
                    <td>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td><input type="checkbox"></td>
                    <td>2</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>危险</td>
                    <td>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <button type="button" class="btn bg-purple margin">删除</button>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                  57条记录/6页
                </div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="example2_previous"><a
                          href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                    </li>
                    <li class="paginate_button active"><a href="#" aria-controls="example2"
                                                          data-dt-idx="1" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button "><a href="#" aria-controls="example2"
                                                    data-dt-idx="2" tabindex="0">2</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="example2"
                                                    data-dt-idx="3" tabindex="0">3</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="example2"
                                                    data-dt-idx="4" tabindex="0">4</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="example2"
                                                    data-dt-idx="5" tabindex="0">5</a></li>
                    <li class="paginate_button "><a href="#" aria-controls="example2"
                                                    data-dt-idx="6" tabindex="0">6</a></li>
                    <li class="paginate_button next" id="example2_next"><a href="#"
                                                                           aria-controls="example2"
                                                                           data-dt-idx="7"
                                                                           tabindex="0">Next</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="overlay">
          <i class="fa fa-spinner fa-spin"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->