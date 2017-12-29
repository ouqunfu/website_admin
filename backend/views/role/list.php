<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addCss($this, '@web/frontend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    角色管理
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 用户</li>
    <li class="active"><a href="<?php echo Url::toRoute('role/list'); ?>">角色管理</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="box">
        <div class="box-body">
          <div id="contents-role-list-info" class="dataTables_wrapper dt-bootstrap">
            <div class="col-sm-4 col-md-1 margin">
              <a href="<?php echo Url::toRoute('role/add'); ?>">
                <button type="button" class="btn btn-block btn-primary">添加角色</button>
              </a>
            </div>
            <div class="col-sm-12 col-md-12 table-responsive">
              <table id="contents-role-list" class="table table-bordered table-hover dataTable" role="grid">
                <thead>
                <tr role="row">
                  <th width="5%">
                    ID
                  </th>
                  <th width="20%">
                    名称
                  </th>
                  <th width="40%">
                    权限
                  </th>
                  <th width="30%">
                    操作
                  </th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td>1</td>
                  <td>超级管理员</td>
                  <td>。。。</td>
                  <td>
                    <a href="javascript:void(0)">查看</a>
                    <a href="javascript:void(0)">编辑</a>
                    <a href="javascript:void(0)">删除</a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>

            <div class="row margin">
              <div class="col-sm-5">
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                  15条记录/1页
                </div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="example2_previous">
                      <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                    </li>
                    <li class="paginate_button active">
                      <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button ">
                      <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a>
                    </li>
                    <li class="paginate_button ">
                      <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a>
                    </li>
                    <li class="paginate_button next" id="example2_next">
                      <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">Next</a>
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
</section>
<!-- /.content -->