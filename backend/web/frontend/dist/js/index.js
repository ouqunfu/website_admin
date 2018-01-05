/**
 * Created by admin on 2017/12/20.
 */
$(function () {

  'use strict';


  $('.daterange').daterangepicker({
    ranges: {
      'Today': [moment(), moment()],
      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
  }, function (start, end) {
    window.alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  });

  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
  // jvectormap data
  var visitorsData = {
    US: 398, // USA
    SA: 400, // Saudi Arabia
    CA: 1000, // Canada
    DE: 500, // Germany
    FR: 760, // France
    CN: 300, // China
    AU: 700, // Australia
    BR: 600, // Brazil
    IN: 800, // India
    GB: 320, // Great Britain
    RU: 3000 // Russia
  };
  // World map by jvectormap
  $('#world-map').vectorMap({
    map: 'world_mill_en',
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: '#e4e4e4',
        'fill-opacity': 1,
        stroke: 'none',
        'stroke-width': 0,
        'stroke-opacity': 1
      }
    },
    series: {
      regions: [
        {
          values: visitorsData,
          scale: ['#92c1dc', '#ebf4f9'],
          normalizeFunction: 'polynomial'
        }
      ]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] != 'undefined')
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
    }
  });

  // The Calender
  $('#calendar').datepicker();

  //tooltip message
  $('[data-toggle="tooltip"]').tooltip();

  //url manage
  $(".select-url-tag").click(function () {
    var urlRule = $("#urlRule").val();
    var selectTag = $(this).attr("data-rule");
    // urlRule = urlRule ? urlRule + '/' + $(this).attr("data-rule") : $(this).attr("data-rule");
    if (urlRule) {
      var arrUrlRule = urlRule.split('/');
      var tempArr = [];
      var flag = -1;
      for (var i = 0; i < arrUrlRule.length; i++) {
        if (selectTag === arrUrlRule[i]) {
          flag = i;
        }
      }
      if (flag > -1) {
        arrUrlRule.splice(flag, 1);
        $(this).removeClass('selected-url');
      } else {
        arrUrlRule.push(selectTag);
        $(this).addClass('selected-url');
      }
      for (var i = 0; i < arrUrlRule.length; i++) {
        if (arrUrlRule[i]) {
          tempArr.push(arrUrlRule[i]);
        }
      }
      urlRule = tempArr.join('/');
    }
    else {
      urlRule = $(this).attr("data-rule");
      $(this).addClass('selected-url');
    }
    urlRule = urlRule ? '/' + urlRule : urlRule;
    $("#urlRule").val(urlRule);
  });
  $("#urlRule").on('blur', function () {
    var urlRule = $(this).val();
    var selectTags = [];
    $(".select-url-tag").each(function (e) {
      selectTags.push($(this).attr("data-rule"));
      $(this).removeClass('selected-url');
    });
    if (urlRule) {
      var arrUrlRule = urlRule.split('/');
      arrUrlRule.forEach(function (rule) {
        $(".select-url-tag").each(function (e) {
          if (rule === $(this).attr("data-rule")) {
            $(this).addClass('selected-url');
          }
        });
      });
      var tempArr = [];
      for (var i = 0; i < arrUrlRule.length; i++) {
        if (arrUrlRule[i]) {
          tempArr.push(arrUrlRule[i]);
        }
      }
      urlRule = tempArr.join('/');
      urlRule = urlRule ? '/' + urlRule : urlRule;
      $("#urlRule").val(urlRule);
    }
  });

  //SEO管理规则
  $(".select-seo-tag").click(function () {
    var selectTag = $(this).attr("data-rule");
    $("#seo_rule").insertAtCursor(selectTag);
  });

  //列表页全选反选
  $("#list_select_all").click(function () {
    if ($(this).is(':checked')) { //全选
      $("table tbody").find("input[type='checkbox']").each(function () {
        $(this).prop("checked", true);
      });
    } else { //反选
      $("table tbody").find("input[type='checkbox']").each(function () {
        $(this).prop("checked", false);
      });
    }
  });
});