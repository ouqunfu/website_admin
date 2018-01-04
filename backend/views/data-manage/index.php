<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;}";
$this->registerCss($cssString);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        数据管理
    </h1>
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> 功能</li>
        <li class="active"><a href="<?php echo Url::toRoute('data-manage/index'); ?>">数据管理</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="box">
                <div class="box-body">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">备份数据库</a></li>
                            <li><a href="#tab_2" data-toggle="tab">还原数据库</a></li>
                            <li><a href="#tab_3" data-toggle="tab">日志管理</a></li>
                            <li><a href="#tab_4" data-toggle="tab">备份整站</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <form class="form-horizontal">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="alert alert-warning alert-dismissible" style="">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="icon fa fa-warning"></i>
                                                欢迎来到数据库备份页面。您可以对网站数据备份，数据将保存在data文件夹中。
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="table-responsive">
                                                <table id="backup-data-list" class="table table-hover dataTable" role="grid">
                                                    <thead>
                                                    <tr role="row">
                                                        <th width="5%">
                                                            <input title="点击全选本页的所有项目" type="checkbox">
                                                        </th>
                                                        <th width="40%">
                                                            表名
                                                        </th>
                                                        <th width="20%">
                                                            记录数
                                                        </th>
                                                        <th width="20%">
                                                            大小
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr role="row" class="odd">
                                                        <td><input type="checkbox"></td>
                                                        <td>ws_user</td>
                                                        <td>1.7</td>
                                                        <td>0K</td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td><input type="checkbox"></td>
                                                        <td>ws_post</td>
                                                        <td>11</td>
                                                        <td>0K</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="segment_size" class="col-sm-2 col-md-1 control-label">分卷大小</label>
                                                <div class="col-sm-5 col-md-3">
                                                    <select class="form-control" id="segment_size">
                                                        <option value="0" selected="">请选择分卷大小...</option>
                                                        <option value="1">1M</option>
                                                        <option value="2">2M</option>
                                                        <option value="5">5M</option>
                                                        <option value="10">10M</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="box-footer">
                                            <div class="col-sm-2 col-md-1">
                                                <button type="submit" class="btn btn-block btn-primary">备份</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_4">
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
                <div class="overlay">
                    <i class="fa fa-spinner fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /.content -->