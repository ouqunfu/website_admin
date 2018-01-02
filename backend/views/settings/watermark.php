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
$cssString = " .nav-tabs-custom{box-shadow: none;} ";
$tableCssString = " #watermark_pos_select tr td{border-color:#8c8888;cursor: pointer; width:150px;} .pos_select{background-color: yellow;} .pos_hover{background-color: yellow;} ";
$this->registerCss($cssString . $tableCssString);
?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      设置
      <small>水印设置</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-dashboard"></i> 设置</li>
      <li class="active"><a href="<?php echo Url::toRoute('settings/watermark'); ?>">水印设置</a></li>
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
                  <li class="active"><a href="#tab_1" data-toggle="tab">图片水印</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="form-group">
                      <label for="watermark_status" class="col-sm-2 control-label">水印开关</label>
                      <div class="col-sm-8 col-md-5">
                        <select class="form-control" id="watermark_status">
                          <option value="0">关</option>
                          <option value="1" selected>开</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_min_width" class="col-sm-2 control-label">最小宽度</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="watermark_min_width" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_min_height" class="col-sm-2 control-label">最小高度</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="watermark_min_height" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_path" class="col-sm-2 control-label">水印路径</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="file" class="form-control" id="watermark_path" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_ts" class="col-sm-2 control-label">透明度</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="watermark_ts" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_qs" class="col-sm-2 control-label">JPEG图片质量</label>
                      <div class="col-sm-8 col-md-5">
                        <input type="text" class="form-control" id="watermark_qs" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="watermark_pos" class="col-sm-2 control-label">添加位置</label>
                      <div class="col-sm-8 col-md-5">
                        <div class="row">
                          <div class="col-md-12">
                            <select class="form-control" id="watermark_pos">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                            </select>
                          </div>
                        </div>
                        <div class="row blank">
                          <div class="col-md-12"><p></p></div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <table class="table table-bordered" border="1" width="1" id="watermark_pos_select"
                                   cellpadding="3" cellspacing="3">
                              <tbody>
                              <tr>
                                <td align="center" valign="top" class="">1</td>
                                <td align="center" valign="top" class="">2</td>
                                <td align="center" valign="top" class="">3</td>
                              </tr>
                              <tr>
                                <td align="center" class="">4</td>
                                <td align="center" class="">5</td>
                                <td align="center" class="">6</td>
                              </tr>
                              <tr>
                                <td align="center" valign="bottom" class="">7</td>
                                <td align="center" valign="bottom">8</td>
                                <td align="center" valign="bottom" class="">9</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
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
  <!--自定义js-->
<?php $this->beginBlock('custom') ?>
  $(function () {
  // fileinput init
  $("#watermark_path").fileinput();

  $('#watermark_pos_select td').each(function(){
  if($(this).html()==5)
  $(this).addClass('pos_select');
  });
  $('#watermark_pos_select td').hover(function(){
  $(this).addClass('pos_hover');
  }, function(){
  $(this).removeClass('pos_hover');
  })
  $('#watermark_pos_select td').click(function(){
  $('#watermark_pos_select td').each(function(){
  $(this).removeClass('pos_select');
  });
  $('#watermark_pos').val($(this).html());
  $(this).addClass('pos_select');
  });
  $('#watermark_pos').click(function(){
  $('#watermark_pos_select td').each(function(){
  $(this).removeClass('pos_select');
  });
  $('#watermark_pos_select td').each(function(){
  if($(this).html()== $('#watermark_pos').val())
  $(this).addClass('pos_select');
  });
  });
  })

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['custom'], \yii\web\View::POS_END); ?>