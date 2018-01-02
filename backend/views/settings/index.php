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
      设置
      <small>网站配置</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 设置</li>
      <li class="active"><a href="<?php echo Url::toRoute('settings/index'); ?>">网站配置</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <form class="form-horizontal">
            <div class="box-body">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">网站信息</a></li>
                  <li><a href="#tab_2" data-toggle="tab">站点设置</a></li>
                  <li><a href="#tab_3" data-toggle="tab">手机版</a></li>
                  <li><a href="#tab_4" data-toggle="tab">动静态设置</a></li>
                  <li><a href="#tab_5" data-toggle="tab">客服设置</a></li>
                  <li><a href="#tab_6" data-toggle="tab">开关设置</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="siteUrl" class="col-sm-2 control-label">网站地址</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteUrl" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteName" class="col-sm-2 control-label">网站名称</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteName" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteTitle" class="col-sm-2 control-label">网站标题</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteTitle" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteKeywords" class="col-sm-2 control-label">网站关键字</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteKeywords" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteDescription" class="col-sm-2 control-label">网站描述</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteDescription" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteLog" class="col-sm-2 control-label">网站logo</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="file" class="form-control" id="siteLog" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="logoX" class="col-sm-2 control-label">logo宽度</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="logoX" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="logoY" class="col-sm-2 control-label">logo高度</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="logoY" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteBeiAnNumber" class="col-sm-2 control-label">公网安备号</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteBeiAnNumber" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="siteICP" class="col-sm-2 control-label">ICP备案号</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="siteICP" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address" class="col-sm-2 control-label">联系地址</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="address" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tel" class="col-sm-2 control-label">联系电话</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="tel" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">联系邮箱</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="postcode" class="col-sm-2 control-label">邮政编码</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="postcode" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                      <label for="site_status" class="col-sm-2 control-label">站点状态</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="site_status">
                          <option value="1" selected >开启</option>
                          <option value="2">关闭</option>
                          <option value="3">挂起</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="site_lang" class="col-sm-2 control-label">语言设置</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="site_lang">
                          <option value="cn" selected>中文</option>
                          <option value="en">英文</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nav_top" class="col-sm-2 control-label">网站导航</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="nav_top">
                          <option value="0">否</option>
                          <option value="1" selected>是</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="frontend_page_size" class="col-sm-2 control-label">前台分页数量</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="frontend_page_size" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="backend_page_size" class="col-sm-2 control-label">后台分页数量</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="backend_page_size" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="login_expired_time" class="col-sm-2 control-label">登录过期时间</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="login_expired_time" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                      <label for="mobile_status" class="col-sm-2 control-label">手机版开关</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="mobile_status">
                          <option value="0">关</option>
                          <option value="1" selected>开</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4"></div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5"></div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_6"></div>
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
  <!--自定义js-->
<?php $this->beginBlock('custom') ?>
  $(function () {
  // fileinput init
  $("#siteLog").fileinput();
  })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>