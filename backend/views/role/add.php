<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this, '@web/frontend/dist/js/role.min.js');

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;} .table tbody tr td{padding-top: 0;}";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      角色管理
      <small>添加标签</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 用户</li>
      <li class="active"><a href="<?php echo Url::toRoute('role/add'); ?>">添加角色</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <form class="form-horizontal" action="<?php echo Url::toRoute('role/post'); ?>" method="post">
            <div class="box-body">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">基本信息</a></li>
                  <li><a href="#tab_2" data-toggle="tab">权限设置</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="rolename" class="col-sm-2 control-label">角色名称</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="rolename" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon"><span data-toggle="tooltip" data-placement="top"
                                                                    class="badge bg-yellow-gradient custom-tooltip"
                                                                    data-original-title="请填写角色名称！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="status" class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-8 col-md-5">
                        <label class="radio-inline">
                          <input id="status" type="radio" name="status" class="minimal" value="1" checked="checked">
                          启用
                        </label>
                        <label class="radio-inline">
                          <input id="status" type="radio" name="status" class="minimal" value="0">
                          禁用
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请选择状态！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                      <div class="col-sm-12 col-md-12">
                        <table id="role-list-0" class="table">
                          <tbody>
                          <tr role="row" class="odd bg-gray">
                            <td colspan="3">
                              <div class="checkbox">
                                <label><input type="checkbox" class="node-1" id="top-node-0" belong="0">内容</label>
                              </div>
                            </td>
                          </tr>
                          <tr role="row">
                            <td colspan="1" width="150px">
                              <div class="checkbox">
                                <label class="margin"><input type="checkbox" class="node-2" id="parent-node-0-0" parent-node="0" belong="0">栏目管理</label>
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="checkbox" id="node-list-0-0">
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-0">栏目列表</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-0">添加栏目</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-0">修改栏目</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-0">删除栏目</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-0">栏目前台权限</label>
                              </div>
                            </td>
                          </tr>
                          <tr role="row">
                            <td colspan="1" width="150px">
                              <div class="checkbox">
                                <label class="margin"><input type="checkbox" class="node-2" id="parent-node-0-1" parent-node="1" belong="0">内容管理</label>
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="checkbox" id="node-list-0-1">
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">内容列表</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">添加内容</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">修改内容</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">删除内容</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">审核内容</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-1">内容前台权限</label>
                              </div>
                            </td>
                          </tr>
                          <tr role="row">
                            <td colspan="1" width="150px">
                              <div class="checkbox">
                                <label class="margin"><input type="checkbox" class="node-2" id="parent-node-0-2" parent-node="2" belong="0">分类管理</label>
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="checkbox" id="node-list-0-2">
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-2">分类列表</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-2">添加分类</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-2">修改分类</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-2">删除分类</label>
                                <label class="margin"><input type="checkbox" class="node-3" belong="0-2">分类前台权限</label>
                              </div>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                        <table id="role-list-1" class="table">
                          <tbody>
                          <tr role="row" class="odd bg-gray">
                            <td colspan="3">
                              <div class="checkbox">
                                <label><input type="checkbox" class="node-1" id="top-node-1" belong="1">用户</label>
                              </div>
                            </td>
                          </tr>
                          <tr role="row">
                            <td colspan="1" width="150px">
                              <div class="checkbox">
                                <label class="margin"><input type="checkbox" class="node-2" id="parent-node-1-0" parent-node="0" belong="1">用户管理</label>
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="checkbox" id="node-list-1-0">
                                <label class="margin"><input name="checked[]" value="1" type="checkbox" class="node-3" belong="1-0">用户列表</label>
                                <label class="margin"><input name="checked[]" value="2" type="checkbox" class="node-3" belong="1-0">添加用户</label>
                                <label class="margin"><input name="checked[]" value="3" type="checkbox" class="node-3" belong="1-0">修改用户</label>
                                <label class="margin"><input name="checked[]" value="4" type="checkbox" class="node-3" belong="1-0">删除用户</label>
                                <label class="margin"><input name="checked[]" value="5" type="checkbox" class="node-3" belong="1-0">用户权限</label>
                              </div>
                            </td>
                          </tr>
                          <tr role="row">
                            <td colspan="1" width="150px">
                              <div class="checkbox">
                                <label class="margin"><input type="checkbox" class="node-2" id="parent-node-1-1" parent-node="1" belong="1">角色管理</label>
                              </div>
                            </td>
                            <td colspan="2">
                              <div class="checkbox" id="node-list-1-1">
                                <label class="margin"><input name="checked[]" value="6"  type="checkbox" class="node-3" belong="1-1">角色列表</label>
                                <label class="margin"><input name="checked[]" value="7"  type="checkbox" class="node-3" belong="1-1">添加角色</label>
                                <label class="margin"><input name="checked[]" value="8"  type="checkbox" class="node-3" belong="1-1">修改角色</label>
                                <label class="margin"><input name="checked[]" value="9"  type="checkbox" class="node-3" belong="1-1">删除角色</label>
                                <label class="margin"><input name="checked[]" value="10"  type="checkbox" class="node-3" belong="1-1">角色权限</label>
                              </div>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
            </div>
            <div class="box-footer">
              <div class="col-sm-2 col-md-1">
                <button type="submit" class="btn btn-block btn-primary">提交</button>
              </div>
            </div>
          </form>
          <div class="overlay">
            <i class="fa fa-spinner fa-spin"></i>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- /.content -->