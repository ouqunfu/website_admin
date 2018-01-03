<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addCss($this, '@web/frontend/bower_components/bootstrap-fileinput/css/fileinput.min.css');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/fileinput.min.js');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/locales/zh.js');

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;}";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      友链管理
      <small>添加友情链接</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 营销</li>
      <li class="active"><a href="<?php echo Url::toRoute('market/market/add-links'); ?>">添加友情链接</a></li>
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
                <label for="link_cato" class="col-sm-2 control-label">所属分类</label>
                <div class="col-sm-8 col-md-5">
                  <select class="form-control" id="link_cato">
                    <option value="1" selected>默认分类</option>
                    <option value="2">test</option>
                  </select>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请选择友链所属分类！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_type" class="col-sm-2 control-label">链接类型</label>
                <div class="col-sm-8 col-md-5">
                  <label class="radio-inline">
                    <input id="checked1" type="radio" name="link_type" class="minimal" checked value="1" onclick="$('#link_logo_div').show()">
                    Logo链接
                  </label>
                  <label class="radio-inline">
                    <input id="checked2" type="radio" name="link_type" class="minimal" value="2" onclick="$('#link_logo_div').hide()">
                    文字链接
                  </label>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请选择链接类型！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_name" class="col-sm-2 control-label">网站名称</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="link_name" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写网站名称！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_url" class="col-sm-2 control-label">网站地址</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="link_url" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写网站地址！">!</span>
                </div>
              </div>
              <div class="form-group" id="link_logo_div">
                <label for="link_logo" class="col-sm-2 control-label">图片logo</label>
                <div class="col-sm-8 col-md-5">
                  <input type="file" name="link_logo" id="link_logo" class="file" data-show-preview="true">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请上传图片logo！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_contact" class="col-sm-2 control-label">网站联系人</label>
                <div class="col-sm-8 col-md-5">
                  <input type="text" class="form-control" id="link_contact" placeholder="">
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写网站联系人！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_brief" class="col-sm-2 control-label">网站简介</label>
                <div class="col-sm-8 col-md-5">
                  <textarea class="form-control" id="link_brief" rows="8" cols="105"></textarea>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请填写网站简介！">!</span>
                </div>
              </div>
              <div class="form-group">
                <label for="link_status" class="col-sm-2 control-label">状态</label>
                <div class="col-sm-8 col-md-5">
                  <label class="radio-inline">
                    <input type="radio" name="link_status" class="minimal" checked value="1">
                    审核
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="link_status" class="minimal" value="2">
                    禁止
                  </label>
                </div>
                <div class="col-sm-1 custom-input-icon">
                  <span data-toggle="tooltip" data-placement="top" class="badge bg-yellow-gradient custom-tooltip"
                        data-original-title="请选择链接状态！">!</span>
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
  <!--自定义js-->
<?php $this->beginBlock('custom') ?>
  $(function () {
  // fileinput init
  $("#link_logo").fileinput();
  //Initialize Select2 Elements

  })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>