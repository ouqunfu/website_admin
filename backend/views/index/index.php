<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'AdminSYS - 后台管理中心';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    首页
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo Url::toRoute('index/index');?>"><i class="fa fa-dashboard"></i> 主页</a></li>
    <li class="active">控制面板</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-file-text"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">内容</span>
          <span class="info-box-number">1,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-teal"><i class="fa fa-list-ul"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">专题</span>
          <span class="info-box-number">111</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-commenting"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">评论</span>
          <span class="info-box-number">1,101</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- ./col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-file-word-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">留言</span>
          <span class="info-box-number">101</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <!--left col-->
    <div class="col-md-7">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">快捷操作</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">
          <a class="btn btn-app">
            <i class="fa fa-cog"></i> 网站设置
          </a>
          <a class="btn btn-app">
            <i class="fa fa-edit"></i> 添加内容
          </a>
          <a class="btn btn-app">
            <span class="badge bg-teal">111</span>
            <i class="fa fa-list-ul"></i> 专题管理
          </a>
          <a class="btn btn-app">
            <i class="fa fa-file-text"></i> 生成HTML
          </a>
          <a class="btn btn-app">
            <i class="fa fa-refresh"></i> 更新缓存
          </a>
          <a class="btn btn-app">
            <span class="badge bg-primary">1</span>
            <i class="fa fa-list-ul"></i> 栏目管理
          </a>
          <a class="btn btn-app">
            <span class="badge bg-primary">2</span>
            <i class="fa fa-list-ul"></i> 分类管理
          </a>
          <a class="btn btn-app">
            <span class="badge bg-primary">3</span>
            <i class="fa fa-list-ul"></i> 用户组管理
          </a>
        </div>
        <!-- /.box-body -->
      </div>
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">最新增加的内容</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>所属分类</th>
                <th>标题</th>
                <th>摘要</th>
                <th>状态</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              <tr>
                <td><a href="javascript:void(0)">分类1</a></td>
                <td><a href="javascript:void(0)">标题1</a></td>
                <td>摘要1</td>
                <td><span class="label label-success">Pending</span></td>
              </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix" style="display: block;">
          <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">添加新的内容</a>
          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">查看所有内容</a>
        </div>
        <!-- /.box-footer -->
      </div>
    </div>
    <!--right col-->
    <div class="col-md-5">
      <!-- Map box -->
      <div class="box box-solid">
        <div class="box-header with-border">
          <!-- tools box -->
          <div class="pull-right box-tools">
            <button type="button" class="btn btn-primary btn-sm daterange pull-right"
                    data-toggle="tooltip"
                    title="Date range">
              <i class="fa fa-calendar"></i></button>
            <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
              <i class="fa fa-minus"></i></button>
          </div>
          <!-- /. tools -->

          <i class="fa fa-map-marker"></i>

          <h3 class="box-title">
            Visitors
          </h3>
        </div>
        <div class="box-body">
          <div id="world-map" style="height: 250px; width: 100%;"></div>
        </div>
        <!-- /.box-body-->
      </div>
      <!-- /.box -->
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">系统信息</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">

        </div>
        <!-- /.box-body -->
      </div>
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">使用指南</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="display: block;">
          <ul class="list-group">
            <li class="list-group-item custom-li"><strong class="strong">设置</strong>&nbsp;&nbsp;设置网站基本信息、网站快捷操作等
            </li>
            <li class="list-group-item custom-li"><strong class="strong">栏目</strong>&nbsp;&nbsp;配置中设置网站栏目及相关参数</li>
            <li class="list-group-item custom-li"><strong class="strong">专题</strong>&nbsp;&nbsp;聚合网站内容</li>
            <li class="list-group-item custom-li"><strong class="strong">营销</strong>&nbsp;&nbsp;设置优化推广及其他信息</li>
            <li class="list-group-item custom-li"><strong class="strong">内容</strong>&nbsp;&nbsp;中添加网站内容</li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->