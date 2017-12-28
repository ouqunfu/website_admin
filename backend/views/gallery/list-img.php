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
    图片库
  </h1>
  <ol class="breadcrumb">
    <li><i class="fa fa-dashboard"></i> 内容</li>
    <li class="active"><a href="<?php echo Url::toRoute('gallery/lis-dir'); ?>">图片库</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="box">
    <div class="box-header with-border">
      <a href="<?php echo Url::toRoute('gallery/list-dir'); ?>" class="btn btn-primary" role="button">返回图片库</a>
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
    <div class="box-body">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin">
          <a href="<?php echo Url::toRoute('gallery/list-img'); ?>" class="thumbnail"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/dist/img/new-gallery-img.jpg'); ?>">
          </a>
          <h4 class="text-center no-padding">credit</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin-bottom">
          <a href="<?php echo Url::to('@web/frontend/uploads/201709/avatar.png'); ?>" class="thumbnail" target="_blank"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/uploads/201709/avatar.png'); ?>">
          </a>
          <h5 class="pull-left">分辨率xxx</h5>
          <a class="pull-right" href="#" style="font-size: large" title="删除图片"><i class="fa fa-trash"></i></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin-bottom">
          <a href="<?php echo Url::to('@web/frontend/uploads/201709/avatar2.png'); ?>" class="thumbnail" target="_blank"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/uploads/201709/avatar2.png'); ?>">
          </a>
          <h5 class="pull-left">分辨率xxx</h5>
          <a class="pull-right" href="#" style="font-size: large" title="删除图片"><i class="fa fa-trash"></i></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin-bottom">
          <a href="<?php echo Url::to('@web/frontend/uploads/201709/avatar3.png'); ?>" class="thumbnail" target="_blank"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/uploads/201709/avatar3.png'); ?>">
          </a>
          <h5 class="pull-left">分辨率xxx</h5>
          <a class="pull-right" href="#" style="font-size: large" title="删除图片"><i class="fa fa-trash"></i></a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin-bottom">
          <a href="<?php echo Url::to('@web/frontend/uploads/201709/icons.png'); ?>" class="thumbnail" target="_blank"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/uploads/201709/icons.png'); ?>">
          </a>
          <h5 class="pull-left">分辨率xxx</h5>
          <a class="pull-right" href="#" style="font-size: large" title="删除图片"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 margin-bottom">
          <a href="<?php echo Url::to('@web/frontend/uploads/201709/photo1.png'); ?>" class="thumbnail" target="_blank"
             style="cursor: pointer;margin-bottom: 0;">
            <img class="img-responsive" src="<?php echo Url::to('@web/frontend/uploads/201709/photo1.png'); ?>">
          </a>
          <h5 class="pull-left">分辨率xxx</h5>
          <a class="pull-right" href="#" style="font-size: large" title="删除图片"><i class="fa fa-trash"></i></a>
        </div>
      </div>
    </div>
    <div class="box-footer">
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
    <div class="overlay">
      <i class="fa fa-spinner fa-spin"></i>
    </div>
  </div>
</section>
<!-- /.content -->