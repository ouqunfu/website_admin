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
    <li class="active"><a href="<?php echo Url::toRoute('gallery/list-dir'); ?>">图片库</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-body">
          <div class="col-sm-6 col-md-2">
            <a href="<?php echo Url::toRoute('gallery/list-img'); ?>" class="thumbnail"
               style="cursor: pointer;margin-bottom: 0;">
              <img class="img-responsive" src="<?php echo Url::to('@web/frontend/dist/img/new-gallery-img.jpg'); ?>">
            </a>
            <h4 class="text-center no-padding">201709</h4>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="<?php echo Url::toRoute('gallery/list-img'); ?>" class="thumbnail"
               style="cursor: pointer;margin-bottom: 0;">
              <img class="img-responsive" src="<?php echo Url::to('@web/frontend/dist/img/new-gallery-img.jpg'); ?>">
            </a>
            <h4 class="text-center no-padding">201710</h4>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="<?php echo Url::toRoute('gallery/list-img'); ?>" class="thumbnail"
               style="cursor: pointer;margin-bottom: 0;">
              <img class="img-responsive" src="<?php echo Url::to('@web/frontend/dist/img/new-gallery-img.jpg'); ?>">
            </a>
            <h4 class="text-center no-padding">201711</h4>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="<?php echo Url::toRoute('gallery/list-img'); ?>" class="thumbnail"
               style="cursor: pointer;margin-bottom: 0;">
              <img class="img-responsive" src="<?php echo Url::to('@web/frontend/dist/img/new-gallery-img.jpg'); ?>">
            </a>
            <h4 class="text-center no-padding">201712</h4>
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