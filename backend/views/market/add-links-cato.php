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
      友链分类
      <small>添加分类</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 内容</li>
      <li class="active"><a href="<?php echo Url::toRoute('market/add-links-cato'); ?>">添加分类</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="link_cato_name" class="col-sm-2 control-label">分类名称</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="link_cato_name" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写分类名称！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_cato_des" class="col-sm-2 control-label">分类描述</label>
                <div class="col-sm-8 col-md-5">
                  <textarea class="form-control" id="link_cato_des" rows="8" cols="105"></textarea>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写分类描述！">!</span>
                </div>
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