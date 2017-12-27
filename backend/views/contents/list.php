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
    内容管理
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 内容</li>
    <li class="active"><a href="<?php echo Url::toRoute('contents/list'); ?>">内容管理</a></li>
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
              <div class="col-md-9">
                <form class="form-inline" role="form">
                  <div class="form-group">
                    <label for="columns" class="control-label">栏目</label>
                    <select class="form-control" id="columns">
                      <option value="0" selected="">请选择...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cato" class="control-label">分类</label>
                    <select class="form-control" id="cato">
                      <option value="0" selected="">请选择...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subjects" class="control-label">专题</label>
                    <select class="form-control" id="subjects">
                      <option value="0" selected="">请选择...</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="title" class="control-label">标题</label>
                    <input type="text" class="form-control" id="title" placeholder="">
                  </div>
                  <button type="button" class="btn bg-blue btn-sm">搜索</button>
                </form>
              </div>
              <div class="col-md-3">
                <div class="pull-right">
                  <a href="<?php echo Url::toRoute('contents/add'); ?>">
                    <button type="button" class="btn bg-blue-gradient btn-sm">添加内容</button>
                  </a>
                  <a href="<?php echo Url::toRoute('contents/check-list'); ?>">
                    <button type="button" class="btn bg-primary btn-sm">审核内容</button>
                  </a>
                  <button type="button" class="btn bg-navy-active btn-sm">回收站</button>
                </div>
              </div>
            </div>
            <div class="row blank">
              <div class="col-sm-12"><p></p></div>
            </div>
            <div class="row blank">
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
                    <th width="8%" class="custom-input">
                      排序
                    </th>
                    <th width="5%">
                      ID
                    </th>
                    <th width="20%">
                      栏目
                    </th>
                    <th width="20%">
                      标题
                    </th>
                    <th width="5%">
                      浏览
                    </th>
                    <th width="10%">
                      添加时间
                    </th>
                    <th width="5%">
                      审核
                    </th>
                    <th width="22%">
                      操作
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td><input type="checkbox"></td>
                    <td class="sorting_1">
                      <input type="text" class="form-control custom-input" placeholder="0" value="0">
                    </td>
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>2017-03-09 21:20:51</td>
                    <td><i class="fa fa-check" style="color: #00a65a;"></i></td>
                    <td>
                      <a href="javascript:void(0)" target="_blank">查看</a>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td><input type="checkbox"></td>
                    <td class="sorting_1">
                      <input type="text" class="form-control custom-input" placeholder="0" value="0">
                    </td>
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>2017-03-09 21:20:51</td>
                    <td><i class="fa fa-check" style="color: #00a65a;"></i></td>
                    <td>
                      <a href="javascript:void(0)" target="_blank">查看</a>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td><input type="checkbox"></td>
                    <td class="sorting_1">
                      <input type="text" class="form-control custom-input" placeholder="0" value="0">
                    </td>
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>2017-03-09 21:20:51</td>
                    <td><i class="fa fa-times" style="color: #dd4b39;"></i></td>
                    <td>
                      <a href="javascript:void(0)" target="_blank">查看</a>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td><input type="checkbox"></td>
                    <td class="sorting_1">
                      <input type="text" class="form-control custom-input" placeholder="0" value="0">
                    </td>
                    <td class="sorting_1">Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>2017-03-09 21:20:51</td>
                    <td><i class="fa fa-check" style="color: #00a65a;"></i></td>
                    <td>
                      <a href="javascript:void(0)" target="_blank">查看</a>
                      <a href="javascript:void(0)">编辑</a>
                      <a href="javascript:void(0)">删除</a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row blank">
              <div class="col-sm-12"><p></p></div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <?php if(isset($this->params['btnTag']) && 'recycle' == $this->params['btnTag'])?>
                <button type="button" class="btn bg-purple btn-sm">排序</button>
                <button type="button" class="btn bg-primary btn-sm">审核</button>
                <button type="button" class="btn bg-gray-active btn-sm">删除</button>
                <button type="button" class="btn bg-gray btn-sm">彻底删除</button>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-md-3">
                移动内容到：
                <select class="form-control custom-select">
                  <option value="0">请选择...</option>
                  <option>option 1</option>
                  <option>option 2</option>
                  <option>option 3</option>
                  <option>option 4</option>
                  <option>option 5</option>
                </select>
                <button type="button" class="btn bg-aqua margin btn-sm">移动</button>
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