/**
 * Created by FEIWU187 on 2017/12/29.
 * role assignment power
 */
$(function () {
  $("input[type='checkbox']").click(function () {
    var classname = $(this).attr('class');
    //顶级
    if ('node-1' === classname) {
      if ($(this).is(':checked')) {
        $("#role-list-" + $(this).attr('belong')).find("input[type='checkbox']").each(function () {
          $(this).prop("checked", true);
        });
      } else {
        $("#role-list-" + $(this).attr('belong')).find("input[type='checkbox']").each(function () {
          $(this).prop("checked", false);
        });
      }
    }
    var checkClassName = '';
    //二级
    if ('node-2' === classname) {
      if ($(this).is(':checked')) {
        $(this).prop("checked", true);
        $("#node-list-" + $(this).attr('belong') + '-' + $(this).attr('parent-node')).find("input[type='checkbox']").each(function () {
          $(this).prop("checked", true);
        });
        $
        ("#top-node-" + $(this).attr('belong')).prop("checked", true);
      } else {
        $(this).prop("checked", false);
        $("#node-list-" + $(this).attr('belong') + '-' + $(this).attr('parent-node')).find("input[type='checkbox']").each(function () {
          $(this).prop("checked", false);
        });
      }
      //二级全选未选判断
      checkClassName = "#role-list-" + $(this).attr('belong') + ' .' + classname;
      checkCheckbox(checkClassName, "#top-node-" + $(this).attr('belong'));
    }
    //三级
    if ('node-3' === classname) {
      var parentNode = $("#parent-node-" + $(this).attr('belong'));
      if ($(this).is(':checked')) {
        $(this).prop("checked", true);
        parentNode.prop("checked", true);
        $("#top-node-" + parentNode.attr('belong')).prop("checked", true);
      } else {
        $(this).prop("checked", false);
        $("#node-list-" + $(this).attr('belong') + '-' + $(this).attr('parent-node')).find("input[type='checkbox']").each(function () {
          $(this).prop("checked", false);
        });
      }
      //三级全选未选判断
      checkClassName = "#node-list-" + $(this).attr('belong') + ' .node-3';
      checkCheckbox(checkClassName, "#parent-node-" + $(this).attr('belong'));
      //二级全选未选判断
      checkClassName = "#role-list-" + parentNode.attr('belong') + ' .node-2';
      checkCheckbox(checkClassName, "#top-node-" + parentNode.attr('belong'));
    }
  });
  function checkCheckbox(classname, obj) {
    var selectNum = 0;
    $(classname).each(function () {
      if ($(this).is(':checked')) {
        selectNum++;
      }
    });
    if (0 === selectNum) {
      $(obj).prop("checked", false);
    }
  }
});
