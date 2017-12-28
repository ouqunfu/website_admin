<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use backend\assets\AppAsset;

$this->title = 'AdminSYS - 后台管理中心';

//load text editor css and js file
AppAsset::addScript($this, '@web/frontend/bower_components/ckeditor/ckeditor.js');

AppAsset::addCss($this, '@web/frontend/bower_components/bootstrap-fileinput/css/fileinput.min.css');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/fileinput.min.js');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-fileinput/js/locales/zh.js');

AppAsset::addCss($this, '@web/frontend/bower_components/select2/dist/css/select2.css');
AppAsset::addScript($this, '@web/frontend/bower_components/select2/dist/js/select2.full.min.js');

AppAsset::addCss($this, '@web/frontend/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');
AppAsset::addScript($this, '@web/frontend/bower_components/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js');

//自定义css
$cssString = ".nav-tabs-custom{box-shadow: none;}";
$this->registerCss($cssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      内容管理
      <small>添加内容</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 内容</li>
      <li class="active"><a href="<?php echo Url::toRoute('columns/add'); ?>">添加内容</a></li>
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
                  <li class="active"><a href="#tab_1" data-toggle="tab">基本信息</a></li>
                  <li><a href="#tab_2" data-toggle="tab">SEO信息</a></li>
                  <li><a href="#tab_3" data-toggle="tab">属性设置</a></li>
                  <li><a href="#tab_4" data-toggle="tab">扩展信息</a></li>
                  <li><a href="#tab_5" data-toggle="tab">权限设置</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="alias" class="col-sm-2 control-label">标题</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="alias" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写标题！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alias" class="col-sm-2 control-label">别名</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="alias" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="columns" class="col-sm-2 control-label">栏目</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="columns">
                          <option value="0" selected="">请选择...</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="选择内容所在栏目，如果栏目有子级栏目，请选择子级栏目！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cato" class="col-sm-2 control-label">分类</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="cato">
                          <option value="0" selected="">请选择...</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="选择内容所在分类，如果分类有子级分类，请选择子级分类！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cato" class="col-sm-2 control-label">专题</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="cato">
                          <option value="0" selected="">请选择...</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="将内容划分到不同专题内，可对不同内容进行区分！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="summary" class="col-sm-2 control-label">内容摘要</label>
                      <div class="col-sm-8 col-md-5">
                        <textarea class="form-control" id="summary" name="summary" rows="8" cols="105"></textarea>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写内容摘要！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="editor" class="col-sm-2 control-label">正文</label>
                      <div class="col-sm-12 col-md-8">
                        <textarea id="editor" name="editor" rows="50" cols="80" style="display: none;"></textarea>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="请填写正文内容！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label"></label>
                      <div class="col-sm-8 col-md-5">
                        <input type="checkbox">第一张图片自动保存为缩略图
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tags" class="col-sm-2 control-label">Tag标签</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control select2" multiple="multiple" data-placeholder="请选择...">
                          <option>Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                          <option>Washington2</option>
                          <option>Washington3</option>
                          <option>Washington4</option>
                        </select>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="选择内容所属Tag标签！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="adddate" class="col-sm-2 control-label">发布时间</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="adddate" readonly>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="内容发布时间！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="outtime" class="col-sm-2 control-label">过期时间</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="outtime" readonly>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="过期内容会被移动到回收站！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="author" class="col-sm-2 control-label">发布作者</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="author" placeholder="admin">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="内容发布作者名，可自定义！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="source" class="col-sm-2 control-label">来源</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="source" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="内容发布来源，可自定义，默认为本站网址！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="checked" class="col-sm-2 control-label">审核</label>
                      <div class="col-sm-8 col-md-5">
                        <label class="radio-inline">
                          <input id="checked1" type="radio" name="checked" class="minimal" value="1">
                          审核
                        </label>
                        <label class="radio-inline">
                          <input id="checked2" type="radio" name="checked" class="minimal" value="0">
                          不审核
                        </label>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="设置内容是否发布，勾选未审核，不在前台显示，内容在后台列表可继续编辑。默认为审核状态！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                      <label for="keywords" class="col-sm-2 control-label">页面标题</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="keywords" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="可填写不同于内容名称的关键词，有利于搜索优化！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="keywords" class="col-sm-2 control-label">关键词</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="keywords" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="网页META信息中的keywords信息，可填写与内容相关的关键词，以英文逗号相隔，有利于搜索优化！">!</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="description" class="col-sm-2 control-label">页面描述</label>
                      <div class="col-sm-8 col-md-5">
                        <textarea class="form-control" id="description" name="description" rows="8"
                                  cols="105"></textarea>
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="网页META信息中的description信息，可填写与内容相关的简介，有利于搜索优化！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="form-group">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-12 col-md-10">
                        【根据选择的栏目和分类】此处为扩展字段属性
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="keywords" class="col-sm-2 control-label">外部链接</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="keywords" placeholder="">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="填写外部链接地址后，点击标题将跳转到填写的地址！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    <div class="form-group">
                      <label for="thumbimg" class="col-sm-2 control-label">缩略图</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="file" name="thumbimg" id="thumbimg" class="file" data-show-preview="true">
                      </div>
                      <div class="col-sm-1 custom-input-icon">
                            <span data-toggle="tooltip" data-placement="top"
                                  class="badge bg-yellow-gradient custom-tooltip"
                                  data-original-title="内容缩略图！">!</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5">
                    <div class="row">
                      <div class="col-sm-12 col-md-12">
                        <div class="alert alert-warning alert-dismissible" style="">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <i class="icon fa fa-warning"></i>
                          勾选为该用户组禁止浏览或下载
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-12"><p></p></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-12"><p></p></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-12">
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-condensed">
                            <tbody>
                            <tr>
                              <th width="30%">用户组</th>
                              <th width="30%">浏览</th>
                              <th width="30%">下载</th>
                            </tr>
                            <tr>
                              <td>管理员</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>文章管理员</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>一般会员</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            <tr>
                              <td>游客</td>
                              <td><input type="checkbox"></td>
                              <td><input type="checkbox"></td>
                            </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.box-body -->
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
  </section>
  <!-- /.content -->
  <!--自定义js-->
<?php $this->beginBlock('custom') ?>
  $(function () {
  // ckeditor init
  CKEDITOR.replace('editor', { height: '400px'});
  // fileinput init
  $("#img").fileinput();
  //Initialize Select2 Elements
  $('.select2').select2();
  //Date time picker
  $('#adddate').datetimepicker({
  language:  'zh-CN',
  autoclose: 1,//选中之后自动隐藏日期选择框
  todayBtn: 1,//今日按钮
  todayHighlight: 1,
  format: "yyyy-mm-dd hh:ii:ss"
  })
  $('#outtime').datetimepicker({
  language:  'zh-CN',
  autoclose: 1,//选中之后自动隐藏日期选择框
  todayBtn: 1,//今日按钮
  todayHighlight: 1,
  format: "yyyy-mm-dd"
  })
  })
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>