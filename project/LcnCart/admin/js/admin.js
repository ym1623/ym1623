// 编辑区窗口大小调整
function editBody()
{
  width = $('body').outerWidth();
  $('#main-tabs').css("width",width-9+"px");

  height = $('body').outerHeight() - $('#crt-menu').outerHeight() - $('#tool').outerHeight(); 
  $('#menu-body').css("height",height-9+"px");
  if($.browser.msie)
    $('#menu-body').css("height",height-7+"px");
}

// 列表区窗口大小调整
function listBody()
{
    //宽度
	width = $('body').outerWidth();
	$('#main-tabs').css("width",width-9+"px");
    //当前菜单名
	$('#crt-menu2').css("width",width-11+"px");
	$('#crt-menu').css("width",width-11+"px");
	$('#crt-menu1').css("width",width-11+"px");  
	// 菜单体 
	$('#menu-body1').css("width",width-10+"px");
	$('#menu-body2').css("width",width-10+"px");
	$('#menu-body').css("width",width-10+"px");
	$('#menu-body3').css("width",width-10+"px");
    //内容
    $('#content').css("width",width-11+"px");
	$('#listTable').css("width",width-11+"px");
	$('#listDiv').css("width",width-11+"px");

   //高度   
    height = $('body').outerHeight() - $('#crt-menu').outerHeight();  
    $('#menu-body').css("height",height-8+"px"); 
	if($.browser.msie)
        $('#menu-body').css("height",height-6+"px");
    var searchH = 0;
	if($('#search'))
	  searchH = $('#search').outerHeight();
	var toolH = 0;
	if($('#tool'))
	  toolH = $('#tool').outerHeight();
    //内容
    $('#content').css("height",height-searchH-toolH-8+"px"); 
}

//奇偶行条纹效果插件
jQuery.fn.alternateRowColors = function() {
  $('tbody tr', this).removeClass('x-grid3-row-alt');
  $('tbody tr:odd', this).addClass('x-grid3-row-alt');
  return this;
};

//hover,onclick on row 
jQuery.fn.eventRowColors = function() {
  $('tbody tr', this).hover(function() {
	  $(this).addClass('x-grid3-row-over');
	}, function() {
	  $(this).removeClass('x-grid3-row-over');
  }).click(function() {
      $(this).siblings('tr').removeClass('x-grid3-row-selected');
	  $(this).addClass('x-grid3-row-selected');
  });
  return this;
};

//表格行在鼠标滑过或者点击的效果
$(document).ready(function() {
    var $table = $('#listTable');
	$table.eventRowColors();
});

//排序
$(document).ready(function() {
    var $table = $('#listTable');
    $table.alternateRowColors();//初始化奇偶行条纹效果
    $('th', $table).each(function(column) {
      var $header = $(this);
      var findSortKey;
      if ($header.is('.sort-alpha')) {//字典索引排序
        findSortKey = function($cell) {
          return $cell.text().toUpperCase();
        };
      }
     else if ($header.is('.sort-numeric')) {//数字排序
        findSortKey = function($cell) {
          var key = $cell.text().replace(/^[^\d.]*/, '');
          key = parseFloat(key);
          return isNaN(key) ? 0 : key;
       };
      }
     // else if ($header.is('.sort-date')) {//时间戳排序
     //   findSortKey = function($cell) {
     //     return Date.parse('1 ' + $cell.text());
     //   };
     // }
          
      if (findSortKey) {
        $header.click(function() {// 点击
          var sortDirection = 1;
          if ($header.is('.sort-asc')) {
            sortDirection = -1;
          }
          var rows = $table.find('tbody > tr').get();//获得数据集合
          $.each(rows, function(index, row) {
            var $cell = $(row).children('td').eq(column);
            row.sortKey = findSortKey($cell);//为每行数据添加一个做查询关键值用的数据项
          });
          rows.sort(function(a, b) {//根据新增的关键值对数据集合进行排序
            if (a.sortKey < b.sortKey) return -sortDirection;
            if (a.sortKey > b.sortKey) return sortDirection;
            return 0;
          });
          $.each(rows, function(index, row) {//置换新排序数据集合
            $table.children('tbody').append(row);
            row.sortKey = null;
          });
          $table.find('th').removeClass('sort-asc')
            .removeClass('sort-desc');//去掉所有标头的排序标记
          if (sortDirection == 1) {//根据排序方式重新添加排序标记
            $header.addClass('sort-asc');
          }
          else {
            $header.addClass('sort-desc');
          }
         // $table.find('td').removeClass('sorted')//标记需要排序的列项
         //   .filter(':nth-child(' + (column + 1) + ')')
         //   .addClass('sorted');
          $table.alternateRowColors();//重置奇偶行条纹效果
        //  $table.trigger('repaginate');///////////////////
        });
      }
    });
});


//工具栏按钮hover效果
$(document).ready(function() {	
	$('#tool').find('table .button').hover(function() {
		  $(this).addClass('x-btn-over');
		}, function() {
		  $(this).removeClass('x-btn-over');
	});
});

//表单

 function showTooltip(obj,errorMessage) {
    $(obj).after("<span class='tip'>"+errorMessage+"</span>")
      .next('span').css({color: "", background: "#f3715c" ,padding: '5px',margin: '10px'})
	  .show();
 }
 function hideTooltip(obj) {
    $(obj).next('span.tip').remove();
 }
function form(){
  $('form :input')
    .focus(function() {
      $(this).addClass('x-form-focus');
    })
    .blur(function() {
      $(this).removeClass('x-form-focus x-form-invalid');
	  if ($(this).hasClass('x-form-required') && this.value == '') {		
        $(this).addClass('x-form-invalid');
		
	  }
	 
	  if ($(this).hasClass('x-form-num') && this.value != '' &&  !/^[\d|\.|,]+$/.test(this.value)){
		$(this).addClass('x-form-invalid');
	  }

      if ($(this).hasClass('x-form-email') && this.value != '' && 
      !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value)){
		$(this).addClass('x-form-invalid');
	  }
      
	  if ($(this).hasClass('x-form-pwd_c') && this.value != $('.x-form-pwd_cc').val()){
		$(this).addClass('x-form-invalid');
	  }


    }).hover(
    function () {
	  if ($(this).hasClass('x-form-invalid')){
	    var errorMessage = '该项不能为空';
		if ($(this).hasClass('x-form-num') && this.value != ''){
          var errorMessage = '该项必须为数值';
		}
		if ($(this).hasClass('x-form-email') && this.value != ''){
          var errorMessage = '请填写正确格式邮箱';
		}
		if ($(this).hasClass('x-form-pwd_c') && this.value != ''){
          var errorMessage = '确认密码不一致';
		}
		showTooltip(this,errorMessage);
	  }	  
    },
    function () {
      hideTooltip(this);
    }
  );
   
  $('#reset').click(function() {
    $("form").each(function(){
      this.reset();
    });
  });

  $('form').submit(function() {
	$(':input').trigger('blur');
    var numWarnings = $('.x-form-invalid', this).length;
	if (numWarnings) {
	  return false;
	}
  });
}

$(document).ready(function() {
form();
});

//表单提交前验证
function beforeSubmit()
{
  $(':input.x-form-required').trigger('blur');
  var numWarnings = $('.x-form-invalid').length;
  if (numWarnings) {
    return false;
  }
  return true;
};

//删除
function _reset_page(){
	ajax($('#reLoad').find('a').attr('href'));
}
function _hide(){
  $('#msg').slideUp('slow');
};
function delete_submit(id, url, obj, name, isPage)
{
    if (confirm('确定删记录 (ID:'+id+') 吗？\n这步操作不可恢复')){
      $.ajax({
	    url: url,
	    type: 'GET',
	    dataType: 'html',
	    success: function(data){
			if(data==-1){
			  $('#msg').removeClass().addClass('fail').text(name+'不是末级分类您不能删除').slideDown('slow',function(){	          
			    setTimeout(_hide, 2500);
		      });
			}else if(data>0){
			  $(obj).parents('tr:first').remove();
		      $('#listTable').alternateRowColors();	
              $('#msg').removeClass().addClass('success').text(name+data+'已经删除').slideDown('slow',function(){	          
			    setTimeout(_hide, 1500);
		      });
			}else{
              $('#msg').removeClass().addClass('success').text(name+data+'不存在').slideDown('slow',function(){	          
			    setTimeout(_hide, 1500);
		      });
			}
		    if(isPage){
	          setTimeout( _reset_page, 3000);
            }
		}
	  });
    } else {
        return;
    }
}

//ajax loading
$(document).ready(function() {	
  var $loadingIndicator = $('<img/>')
      .attr({
        'src': base_url+'images/blue-loading.gif', 
        'alt': 'Loading. Please wait.'
      })
      .addClass('wait')
      .appendTo($('body'))
	  .hide()
	  .ajaxStart(function(){
	    $(this).show();
	  }).ajaxStop(function(){
	    $(this).hide();
	  });
});

//分页
function pageStyle()
{
  if ($('#totalPages span').text()){
	if($('#cur-page') && $('#cur-page').val() <=1){
		$('#pageFirst,#pagePrev table').addClass('x-item-disabled');
	}else{
        $('#pageFirst,#pagePrev table').removeClass('x-item-disabled');
	}
    if($('#cur-page') && $('#cur-page').val() >= $('#totalPages span.total_pages').text()){
		$('#pageLast,#pageNext table').addClass('x-item-disabled');
	}else{
		$('#pageLast,#pageNext table').removeClass('x-item-disabled');
	}
  }
}
function ajax(url)
{  
  $.ajax({
    url: url+'/ajax/1',
    type: 'POST',
    dataType: 'html',
    success: function(data){	//alert(data);  
	  $('.x-grid3-row').remove();
	  $('#page').remove();
	  $('.x-grid3-row',data).appendTo($('#listTable tbody'));	  
	  $('#page',data).appendTo($('#content'));
	  $('#search_page').val($('#cur-page').val());

	  pageStyle();
	  pageClick()
	  $('#listTable').alternateRowColors().eventRowColors();
    }
  });
}
$(document).ready(function() {
  pageStyle();
  pageClick = function(){
	$('#pagePrev').click(function(){
	  page_prev = $(this).find('a').attr('href');
	  ajax(page_prev);	
	});
	$('#pageNext').click(function(){
	  page_next = $(this).find('a').attr('href');
	  ajax(page_next);
	});  
	$('#pageFirst').click(function(){
	  page_first = $(this).find('a').attr('href');
	  ajax(page_first);
	});
	$('#pageLast').click(function(){
	  page_last = $(this).find('a').attr('href');
	  ajax(page_last);
	});
	$('#reLoad').click(function(){
	  window.location.href = $('#reLoad').find('a').attr('href');
	});
	$('#cur-page').focus(function(){
	  cur_page = $('#reLoad').find('a').attr('href');
	  $(this).keydown(function(event){
	    if (event.which && event.which == 13){
		  pos = cur_page.lastIndexOf('page/')+5;
		  A = cur_page.substr(0,pos);
		  B = $('#cur-page').val()-1;
		  C = cur_page.substr(pos+1);
		  cur_page = A+B+C;
		  ajax(cur_page);
	    }
	  });
	});
  }
  pageClick();
});